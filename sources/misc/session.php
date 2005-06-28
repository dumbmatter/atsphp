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

class Session {
  var $sid;
  var $type;
  var $data;
  var $time;

  function Session () {
    $this->time = time();
    $this->data = 0;
  }

  function GetID ($size) {
    mt_srand((double) microtime() * 1000000);
    for ($i=1; $i<=$size; $i++) {
      $random = mt_rand(1,30);
      if ($random <= 10) {
        $sid .= chr(mt_rand(65,90));
      }
      elseif ($random <= 20) {
        $sid .= mt_rand(0,9);
      }
      else {
        $sid .= chr(mt_rand(97,122));
      }
    }

    $this->sid = $sid;

    return $this->sid;
  }

  function SetType ($settype) {
    $this->type = $settype;

    return $this->type;
  }

  function SetData ($setdata) {
    $this->data = $setdata;

    return $this->data;
  }

  function Create ($create) {
    global $CONFIG, $db;

    $db->Execute("INSERT INTO ".$CONFIG['sql_prefix']."_sessions (id, type, created, data) VALUES ('".$this->sid."', '".$this->type."', ".$this->time.", ".$this->data.")");
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
