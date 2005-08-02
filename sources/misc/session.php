<?php
//=================================================================\\
// Aardvark Topsites PHP 4.2.1                                     \\
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

class session {
  var $sid;
  var $type;
  var $data;
  var $time;

  function session() {
    $this->time = time();
    $this->data = 0;
  }

  function get_id($size) {
    for ($i=1; $i<=$size; $i++) {
      $random = mt_rand(1,30);
      if ($random <= 10) {
        $this->sid .= chr(mt_rand(65,90));
      }
      elseif ($random <= 20) {
        $this->sid .= mt_rand(0,9);
      }
      else {
        $this->sid .= chr(mt_rand(97,122));
      }
    }

    return $this->sid;
  }

  function set_type($type) {
    $this->type = $type;

    return 1;
  }

  function set_data($data) {
    $this->data = $data;

    1;
  }

  function create() {
    global $CONFIG, $DB;

    $DB->query("INSERT INTO {$CONFIG['sql_prefix']}_sessions (id, type, created, data) VALUES ('{$this->sid}', '{$this->type}', {$this->time}, '{$this->data}')", ___FILE___, ___LINE___);
  }
}

function CheckSession ($sid) {
  global $CONFIG, $db;

  $result = $db->Execute("SELECT type, data FROM ".$CONFIG['sql_prefix']."_sessions WHERE id = '$sid'");
  $typedata = $db->FetchArray($result);

  return $typedata;
}

function UpdateSession ($sid) {
  global $CONFIG, $db;

  $time = time();
  $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_sessions SET created = $time WHERE id = '$sid'");
}

function KillSession ($sid) {
  global $CONFIG, $db;

  $db->Execute("DELETE FROM ".$CONFIG['sql_prefix']."_sessions WHERE id = '$sid'");
}

$check_time = time() - 600;
$db->Execute("DELETE FROM ".$CONFIG['sql_prefix']."_sessions WHERE created <= ".$check_time);
?>
