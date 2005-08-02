<?php
//=================================================================\\
// Aardvark Topsites PHP 5.0                                       \\
//-----------------------------------------------------------------\\
// Copyright 2003-2004 Jeremy Scheff - http://www.aardvarkind.com/ \\
//-----------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or   \\
// modify it under the terms of the GNU General Public License     \\
// as published by the Free Software Foundation; either version 2  \\
// of the License, or (at your option) any later version.          \\
//                                                                 \\
// This program is distributed in the hope that it will be useful, \\
// but WITHOUT ANY WARRANTY; without even the implied warranty of  \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   \\
// GNU General Public License for more details.                    \\
//=================================================================\\

class base {
  function error($message, $kill_script = true) {
    global $TMPL;

    $TMPL['error'] = $message;
    $TMPL['content'] = $this->do_skin('error');

    if ($kill_script) {
      echo $this->do_skin('wrapper');
      exit;
    }
  }

  function check_id($id) {
    global $LNG;

    if (!is_numeric($id) || $id < 1) {
      error($LNG['stats_error_id'], 1);
    }
    else {
      $id = intval($id);
      return $id;
    }
  }

  function do_skin($filename) {
    $skin = new skin($filename);
    return $skin->make();
  }
}

class join_edit extends base {
  function check_input() {
    global $CONF, $FORM

    if (!preg_match('/http/', $FORM['url'])) { $error_url = 1; }
    if (!preg_match('/.+\@.+\.\w+/', $FORM['email'])) { $error_email = 1; }
    if (!$FORM['title']) { $error_title = 1; }
    if (!$FORM['password']) { $error_password = 1; }
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

    if ($error_url || $error_email || $error_title || $error_password || $error_banner_url) {
      $error = "{$LNG['join_error_forgot']}<br />\n";
      if ($error_url) { $error .= "{$LNG['join_error_url']}<br />"; }
      if ($error_email) { $error .= "{$LNG['join_error_email']}<br />"; }
      if ($error_title) { $error .= "{$LNG['join_error_title']}<br />"; }
      if ($error_password) { $error .= "{$LNG['join_error_password']}<br />"; }
      if ($error_urlbanner) { $error .= "{$LNG['join_error_urlbanner']} {$CONF['max_banner_width']}x{$CONF['max_banner_height']}.<br />"; }
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

  function __construct () {
    $this->start_time = array_sum(explode(' ', microtime()));
  }

  function get_time () {
    $current_time = array_sum(explode(' ', microtime()));
    return round($current_time - $this->start_time, 5);
  }
}
?>
