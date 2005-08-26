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

class session {
  function session() {
    global $CONF, $DB;

    // Delete sessions that are over an hour old
    $check_time = time() - 3600;
    $DB->query("DELETE FROM {$CONF['sql_prefix']}_sessions WHERE time < {$check_time}", __FILE__, __LINE__);
  }

  function create($type, $data, $cookie = 1) {
    global $CONF, $DB;

    $sid = $this->make_sid(32);
    $time = time();

    $DB->query("INSERT INTO {$CONF['sql_prefix']}_sessions (type, sid, time, data) VALUES ('{$type}', '{$sid}', {$time}, '{$data}')", __FILE__, __LINE__);

    if ($cookie) {
      setcookie("atsphp_sid_{$type}", $sid);
    }

    return $sid;
  }

  function delete($sid, $name = 0) {
    global $CONF, $DB;

    if ($this->check_sid($sid)) {
      list($type, $data) = $this->get($sid);
      if (!$name) {
        $name = "atsphp_sid_{$type}";
      }

      setcookie($name, 0, time() - 3600);
      $DB->query("DELETE FROM {$CONF['sql_prefix']}_sessions WHERE sid = '{$sid}'", __FILE__, __LINE__);

      return 1;
    }
    else {
      return 0;
    }
  }

  function get($sid) {
    global $CONF, $DB;

    if ($this->check_sid($sid)) {
      $session = $DB->fetch("SELECT type, data FROM {$CONF['sql_prefix']}_sessions WHERE sid = '{$sid}'", __FILE__, __LINE__);
      return $session;
    }
    else {
      return 0;
    }
  }

  function update($sid) {
    global $CONF, $DB;

    if ($this->check_sid($sid)) {
      $time = time();
      $DB->query("UPDATE {$CONF['sql_prefix']}_sessions SET time = {$time} WHERE sid = '{$sid}'", __FILE__, __LINE__);
      return 1;
    }
    else {
      return 0;
    }
  }

  function check_sid($sid) {
    if (preg_match('/^[a-zA-Z0-9]+$/', $sid)) {
      return 1;
    }
    else {
      return 0;
    }
  }

  function make_sid($length) {
    $sid = '';
    for ($i = 1; $i <= $length; $i++) {
      $random = mt_rand(1, 30);
      if ($random <= 10) {
        $sid .= chr(mt_rand(65, 90));
      }
      elseif ($random <= 20) {
        $sid .= mt_rand(0, 9);
      }
      else {
        $sid .= chr(mt_rand(97, 122));
      }
    }

    return $sid;
  }
}
?>
