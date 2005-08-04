<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
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

if (!isset($from_index)) {
  // Change the path to your full path if necessary
  $CONF['path'] = '.';

  // Connect to the database
  require_once "{$CONF['path']}/settings_sql.php";
  require_once "{$CONF['path']}/sources/sql/{$CONF['sql']}.php";
  $DB = new sql;
  $DB->connect($CONF['sql_host'], $CONF['sql_user'], $CONF['sql_password'], $CONF['sql_database']);

  // Settings
  $settings = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_settings", __FILE__, __LINE__);
  $CONF = array_merge($CONF, $settings);

  $go_to_index = 1;
  $username = $DB->escape($_GET['u']);
}
else {
  $go_to_index = 0;
  require_once "{$CONFIG['path']}/sources/misc/get_username.php";
  $username = get_username($_SERVER['HTTP_REFERER']);
}

list($username_sql) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username}'", __FILE__, __LINE__);
if ($username && $username_sql == $username) {
////////////////////////////////////////////////////////////////////////////////
  if ($CONFIG['gateway']) {
    // Skin stuff
    require_once $CONFIG['path'].'/config_skins.php';
    if ($FORM['skin_name']) { $TMPL['skin_name'] = $FORM['skin_name']; }
    else { $TMPL['skin_name'] = isset($CONFIG['skin'][$FORM['cat']]) ? $CONFIG['skin'][$FORM['cat']] : $CONFIG['default_skin']; }
    if (!is_dir($CONFIG['path'].'/skins/'.$TMPL['skin_name'])) { $TMPL['skin_name'] = $CONFIG['default_skin']; }
    require_once $CONFIG['path'].'/sources/template.php';

    require_once $CONFIG['path'].'/languages/'.$CONFIG['deflanguage'].'.php';

    require_once $CONFIG['path'].'/sources/session.php';

    if ($FORM['session_id']) {
      list($type, $data) = CheckSession($FORM['session_id']);
      if ($type != "gateway") {
        require $CONFIG['path'].'/index.php';
        exit;
      }
      KillSession($FORM['session_id']);
    }
    else {
      $session = new Session;
      $TMPL['session_id'] = $session->GetID(24);
      $session->SetType('gateway');
      $session->Create(1);

      $TMPL['id'] = $FORM['id'];
      echo do_template("gateway");
      exit;
    }
  }

  $ip = getenv("REMOTE_ADDR");
  $result = $db->Execute("SELECT ip_address, unq_in FROM ".$CONFIG['sql_prefix']."_iplog WHERE ip_address = '$ip' AND id4 = ".$FORM['id']);
  list($ip2, $unq_in) = $db->FetchArray($result);

  if ($ip2 == $ip && $unq_in == 1) {

  }
  elseif ($ip2 == $ip) {
    $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_iplog SET unq_in = 1 WHERE ip_address = '$ip' AND id4 = ".$FORM['id']);
    $unique = ", unq_in_today = unq_in_today + 1";
  }
  else {
    $db->Execute("INSERT INTO ".$CONFIG['sql_prefix']."_iplog (ip_address, id4, unq_in) VALUES ('".$ip."', ".$FORM['id'].",1)");
    $unique = ", unq_in_today = unq_in_today + 1";
  }

  $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_stats SET tot_in_today = tot_in_today + 1".$unique." WHERE id2 = ".$FORM['id']);

  $db->Close;
}

if ($go_to_index) {
  require $CONFIG['path'].'/index.php';
}
?>
