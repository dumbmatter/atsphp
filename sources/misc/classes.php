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
  function error($message) {
    global $TMPL;

    $TMPL['error'] = $message;
    $TMPL['content'] = $this->do_skin('error');

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

    $rank_by = '(';
    for ($i = 0; $i < 10; $i++) {
      $rank_by .= "unq_{$ranking_method}_{$i}_{$ranking_period} + ";
    }
    $rank_by .= "0) / 10";

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
    $ip = getenv("REMOTE_ADDR");
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
  function check_input() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $error_username = 0;
    $error_username_duplicate = 0;
    $error_url = 0;
    $error_email = 0;
    $error_title = 0;
    $error_password = 0;
    $error_banner_url = 0;

    if (!preg_match('/^[a-zA-Z0-9\-]+$/', $FORM['u'])) {
      $error_username = 1;
    }
    list($username_sql) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    if ($username_sql == $TMPL['username']) {
      $error_username_duplicate = 1;
    }
    if (!preg_match('/http/', $FORM['url'])) {
      $error_url = 1;
    }
    if (!preg_match('/.+\@.+\.\w+/', $FORM['email'])) {
      $error_email = 1;
    }
    if (!$FORM['title']) {
      $error_title = 1;
    }
    if (!$FORM['password']) {
      $error_password = 1;
    }
    if ($FORM['banner_url'] == '' || $FORM['banner_url'] == 'http://') {
      $FORM['banner_url'] = $CONF['default_banner'];
    }
    elseif ($CONF['max_banner_width'] && $CONF['max_banner_height']) {
      $size = @getimagesize($FORM['banner_url']);
      if ($size[0] > $CONF['max_banner_width'] || $size[1] > $CONF['max_banner_height']) {
        $error_banner_url = 1;
      }
      if (!isset($size[0]) && !isset($size[1])) { $error_banner_url = 1; }
    }

    if ($error_username || $error_username_duplicate || $error_url || $error_email || $error_title || $error_password || $error_banner_url) {
      $error = "{$LNG['join_error_forgot']}<br />\n";
      if ($error_username) { $error .= "{$LNG['join_error_username']}<br />"; }
      if ($error_username_duplicate) { $error .= "{$LNG['join_error_username_duplicate']}<br />"; }
      if ($error_url) { $error .= "{$LNG['join_error_url']}<br />"; }
      if ($error_email) { $error .= "{$LNG['join_error_email']}<br />"; }
      if ($error_title) { $error .= "{$LNG['join_error_title']}<br />"; }
      if ($error_password) { $error .= "{$LNG['join_error_password']}<br />"; }
      if ($error_banner_url) { $error .= "{$LNG['join_error_urlbanner']} {$CONF['max_banner_width']}x{$CONF['max_banner_height']}.<br />"; }
      $error .= "<br />{$LNG['join_error_back']}";

      $this->error($error);

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
