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

abstract class base {
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

class timer {
  protected $start_time;

  function __construct () {
    $this->start_time = array_sum(explode(' ', microtime()));
  }

  function get_time () {
    $current_time = array_sum(explode(' ', microtime()));
    return round($current_time - $this->start_time, 5);
  }
}
?>