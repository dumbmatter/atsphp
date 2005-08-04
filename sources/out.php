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

require_once $CONFIG['path'].'/sources/drivers/'.$CONFIG['sql'].'.php';
$db = new SQL;
$db->Connect($CONFIG['sql_host'], $CONFIG['sql_user'], $CONFIG['sql_pass'], $CONFIG['sql_database']);

if ($FORM['id'] == "random") {
  $result = $db->Execute("SELECT num_members FROM ".$CONFIG['sql_prefix']."_etc");
  list($nummem) = $db->FetchArray($result);
  $nummem--;
  $limit = rand(0, $nummem);
  $result = $db->Execute("SELECT id FROM ".$CONFIG['sql_prefix']."_members LIMIT ".$limit.", 1");
  list($FORM['id']) = $db->FetchArray($result);
}
elseif (!is_numeric($FORM['id'])) {
  require $CONFIG['path'].'/index.php';
  exit;
}
else { $FORM['id'] = intval($FORM['id']); }

$ip = getenv("REMOTE_ADDR");
$result = $db->Execute("SELECT ip_address, unq_out FROM ".$CONFIG['sql_prefix']."_iplog WHERE ip_address = '$ip' AND id4 = ".$FORM['id']);
list($ip2, $unq_out) = $db->FetchArray($result);

if ($ip2 == $ip && $unq_out == 1) {

}
elseif ($ip2 == $ip) {
  $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_iplog SET unq_out = 1 WHERE ip_address = '$ip' AND id4 = ".$FORM['id']);
  $unique = ", unq_out_today = unq_out_today + 1";
}
else {
  $db->Execute("INSERT INTO ".$CONFIG['sql_prefix']."_iplog (ip_address, id4, unq_out) VALUES ('".$ip."', ".$FORM['id'].",1)");
  $unique = ", unq_out_today = unq_out_today + 1";
}

$db->Execute("UPDATE ".$CONFIG['sql_prefix']."_stats SET tot_out_today = tot_out_today + 1".$unique." WHERE id2 = ".$FORM['id']);

$result = $db->Execute("SELECT url FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']);
list($url) = $db->FetchArray($result);

$db->Close;

header("Location: ".$url);
?>
