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

error_reporting(E_ERROR | E_WARNING | E_PARSE);
set_magic_quotes_runtime(0);

require_once 'config.php';

require_once $CONFIG['path'].'/sources/functions.php';
$FORM = parse_form();

if (!is_numeric($FORM['id'])) {
  require $CONFIG['path'].'/index.php';
  exit;
}
else { $FORM['id'] = intval($FORM['id']); }

require_once $CONFIG['path'].'/sources/drivers/'.$CONFIG['sql'].'.php';
$db = new SQL;
$db->Connect($CONFIG['sql_host'], $CONFIG['sql_user'], $CONFIG['sql_pass'], $CONFIG['sql_database']);

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

require $CONFIG['path'].'/index.php';
?>
