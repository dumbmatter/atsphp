<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2005 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarkind.com/                        http://www.avatic.com/ \\
//---------------------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or modify it   \\
// under the terms of the GNU General Public License as published by the     \\
// Free Software Foundation; either version 2 of the License, or (at your    \\
// option) any later version.                                                \\
//                                                                           \\
// This program is distributed in the hope that it will be useful, but       \\
// WITHOUT ANY WARRANTY; without even the implied warranty of                \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General \\
// Public License for more details.                                          \\
//===========================================================================\\

class base {
  function error($message, $skin = 0) {
    global $TMPL;

    $TMPL['error'] = $message;
    if ($skin) {
      $TMPL["{$skin}_content"] = $this->do_skin('error');
      $TMPL['content'] = $this->do_skin($skin);
    }
    else {
      $TMPL['content'] = $this->do_skin('error');
    }

    $skin = new main_skin('wrapper');
    echo $skin->make();
    exit;
  }

  function do_skin($filename) {
    $skin = new skin($filename);
    return $skin->make();
  }

  function rank_by($ranking_method = 0, $ranking_period = 0) {
    global $CONF;

    if (!$ranking_method) {
      $ranking_method = $CONF['ranking_method'];
    }
    if (!$ranking_period) {
      $ranking_period = $CONF['ranking_period'];
    }

    if ($ranking_period == 'overall') {
      $rank_by = "unq_{$ranking_method}_overall";
    }
    elseif (!$CONF['ranking_average']) {
      $rank_by .= "unq_{$ranking_method}_0_{$ranking_period}";
    }
    else {
      $rank_by = '(';
      for ($i = 0; $i < 10; $i++) {
        $rank_by .= "unq_{$ranking_method}_{$i}_{$ranking_period} + ";
      }
      $rank_by .= "0) / 10";
    }

    return $rank_by;
  }
}

class in_out extends base {
  function record($username, $in_out) {
    global $CONF, $DB, $TMPL;

    if ($in_out != 'in' && $in_out != 'out') {
      return 0;
    }

    // Is this a unique hit?
    $ip = getenv('REMOTE_ADDR');
    list($ip_sql, $unq) = $DB->fetch("SELECT ip_address, unq_{$in_out} FROM {$CONF['sql_prefix']}_ip_log WHERE ip_address = '$ip' AND username = '{$username}'", __FILE__, __LINE__);

    $unique_sql = ", unq_{$in_out}_overall = unq_{$in_out}_overall + 1, unq_{$in_out}_0_daily = unq_{$in_out}_0_daily + 1, unq_{$in_out}_0_weekly = unq_{$in_out}_0_weekly + 1, unq_{$in_out}_0_monthly = unq_{$in_out}_0_monthly + 1";
    if ($ip == $ip_sql && $unq == 0) {
      $DB->query("UPDATE {$CONF['sql_prefix']}_ip_log SET unq_{$in_out} = 1 WHERE ip_address = '{$ip}' AND username = '{$username}'", __FILE__, __LINE__);
    }
    elseif ($ip != $ip_sql) {
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_ip_log (ip_address, username, unq_{$in_out}) VALUES ('{$ip}', '{$username}' ,1)", __FILE__, __LINE__);
    }
    else {
      $unique_sql = '';
    }

    // Update stats
    $DB->query("UPDATE {$CONF['sql_prefix']}_stats SET tot_{$in_out}_overall = tot_{$in_out}_overall + 1, tot_{$in_out}_0_daily = tot_{$in_out}_0_daily + 1, tot_{$in_out}_0_weekly = tot_{$in_out}_0_weekly + 1, tot_{$in_out}_0_monthly = tot_{$in_out}_0_monthly + 1{$unique_sql} WHERE username = '{$username}'", __FILE__, __LINE__);

    return 1;
  }
}

class join_edit extends base {
  function check_input($type) {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $error_username = 0;
    $error_username_duplicate = 0;
    $error_password = 0;
    $error_url = 0;
    $error_email = 0;
    $error_title = 0;
    $error_banner_url = 0;
    $error_captcha = 0;

    if ($type == 'join') {
      if (!preg_match('/^[a-zA-Z0-9\-_]+$/', $FORM['u']) && !$TMPL['openid']) {
        $error_username = 1;
      }
      list($username_sql) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
      if ($username_sql && $username_sql == $TMPL['username']) {
        $error_username_duplicate = 1;
      }
      if (!$FORM['password'] && !$TMPL['openid']) {
        $error_password = 1;
      }
      if ($CONF['captcha']) {
        list($sid) = $DB->fetch("SELECT sid FROM {$CONF['sql_prefix']}_sessions WHERE type = 'captcha' AND data LIKE '{$_SERVER['REMOTE_ADDR']}|%'", __FILE__, __LINE__);
        require_once("{$CONF['path']}/sources/misc/session.php");
        $session = new session;
        list($type, $data) = $session->get($sid);
        list($ip, $hash) = explode('|', $data);
        if ($hash != sha1($FORM['captcha']) || strlen($FORM['captcha']) != 6) {
          $error_captcha = 1;
        }
        $session->delete($sid);
      }
    }
    if (!preg_match('/^https?:\/\/.+/', $TMPL['url'])) {
      $error_url = 1;
    }
    if (!preg_match('/.+\@.+\.\w+/', $TMPL['email'])) {
      $error_email = 1;
    }
    if (!$TMPL['title']) {
      $error_title = 1;
    }
    if (!preg_match('/^https?:\/\/.+/', $TMPL['banner_url'])) {
      $TMPL['banner_url'] = $CONF['default_banner'];
    }
    elseif ($CONF['max_banner_width'] && $CONF['max_banner_height']) {
      $size = @getimagesize($FORM['banner_url']);
      if ($size[0] > $CONF['max_banner_width'] || $size[1] > $CONF['max_banner_height']) {
        $error_banner_url = 1;
      }
      if (!isset($size[0]) && !isset($size[1])) { $error_banner_url = 1; }
    }

    if ($error_username || $error_username_duplicate || $error_password || $error_url || $error_email || $error_title || $error_banner_url || $error_captcha) {
      if ($error_username) {
        $TMPL['error_username'] = "<br />{$LNG['join_error_username']}";
        $TMPL['error_style_username'] = 'join_edit_error';
      }
      if ($error_username_duplicate) {
        $TMPL['error_username'] = "<br />{$LNG['join_error_username_duplicate']}";
        $TMPL['error_style_username'] = 'join_edit_error';
        $TMPL['error_openid'] = "<br />{$LNG['join_error_username_duplicate']}";
        $TMPL['error_style_openid'] = 'join_edit_error';
      }
      $TMPL['error_password'] = "<br />{$LNG['join_error_password']}";
      $TMPL['error_style_password'] = 'join_edit_error';
      if ($error_url) {
        $TMPL['error_url'] .= "<br />{$LNG['join_error_url']}";
        $TMPL['error_style_url'] = 'join_edit_error';
      }
      if ($error_email) {
        $TMPL['error_email'] .= "<br />{$LNG['join_error_email']}";
        $TMPL['error_style_email'] = 'join_edit_error';
      }
      if ($error_title) {
        $TMPL['error_title'] .= "<br />{$LNG['join_error_title']}";
        $TMPL['error_style_title'] = 'join_edit_error';
      }
      if ($error_banner_url) {
        $TMPL['error_banner_url'] .= "<br />{$LNG['join_error_urlbanner']} {$CONF['max_banner_width']}x{$CONF['max_banner_height']}.";
        $TMPL['error_style_banner_url'] = 'join_edit_error';
      }
      if ($error_captcha) {
        $TMPL['error_captcha'] .= "<br />{$LNG['join_error_captcha']}";
        $TMPL['error_style_captcha'] = 'join_edit_error';
      }

      return 0;
    }
    else {
      return 1;
    }
  }
}

class timer {
  var $start_time;

  function timer () {
    $this->start_time = array_sum(explode(' ', microtime()));
  }

  function get_time () {
    $current_time = array_sum(explode(' ', microtime()));
    return round($current_time - $this->start_time, 5);
  }
}
?>
