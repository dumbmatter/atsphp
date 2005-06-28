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

// Start the timer
$starttime = microtime();
$starttime = explode(' ', $starttime);
$starttime = $starttime[1] + $starttime[0];

// Settings
require_once 'config.php';
require_once $CONFIG['path'].'/config_skins.php';
$queries = array();
$TMPL['queries'] = 0;

// Require functions and process GET and POST input
require_once $CONFIG['path'].'/sources/functions.php';
$FORM = parse_form();

// The language file
require_once $CONFIG['path'].'/languages/'.$CONFIG['deflanguage'].'.php';

// Skin stuff
if ($FORM['skin_name']) { $TMPL['skin_name'] = $FORM['skin_name']; }
else { $TMPL['skin_name'] = isset($CONFIG['skin'][$FORM['cat']]) ? $CONFIG['skin'][$FORM['cat']] : $CONFIG['default_skin']; }
if (!is_dir($CONFIG['path'].'/skins/'.$TMPL['skin_name'])) { $TMPL['skin_name'] = $CONFIG['default_skin']; }
require_once $CONFIG['path'] . '/sources/template.php';

// Connect to the database
require_once $CONFIG['path'].'/sources/drivers/'.$CONFIG['sql'].'.php';
$db = new SQL;
$db->Connect($CONFIG['sql_host'], $CONFIG['sql_user'], $CONFIG['sql_pass'], $CONFIG['sql_database']);

if ($FORM['a'] == "top") {
  $TMPL['num'] = $FORM['num'] ? $FORM['num'] : 5;
  $rankingmethod = $FORM['method'] ? $FORM['method'] : $CONFIG['rankingmethod'];
  $TMPL['rank'] = 1;

  $result = $db->Execute("SELECT id, url, title, description, urlbanner
                         FROM ".$CONFIG['sql_prefix']."_members, ".$CONFIG['sql_prefix']."_stats
                         WHERE id = id2 AND active = 1
                         ORDER BY (".$rankingmethod."_today + ".$rankingmethod."_1 + ".$rankingmethod."_2 + ".$rankingmethod."_3) / 4 DESC
                         LIMIT ".$TMPL['num']);

  while (list($TMPL['id'], $TMPL['real_url'], $TMPL['title'], $TMPL['description'], $TMPL['urlbanner']) = $db->FetchArray($result)) {
    $TMPL['url'] = $CONFIG['list_url']."/out.php?id=".$TMPL['id'];
    $TMPL['sites'] .= $TMPL['rank'].". <a href=\"".$TMPL['url']."\" target=\"_blank\">".$TMPL['title']."</a><br />\n";
    $TMPL['rank']++;
  }

  $LNG['ssi_top'] = sprintf($LNG['ssi_top'], $TMPL['num']);

  echo do_template("ssi_top");
}
elseif ($FORM['a'] == "newmembers") {
  $TMPL['num'] = $FORM['num'] ? $FORM['num'] : 5;

  $result = $db->Execute("SELECT id, url, title, description, urlbanner
                         FROM ".$CONFIG['sql_prefix']."_members
                         WHERE active = 1
                         ORDER BY jointime DESC
                         LIMIT ".$TMPL['num']);

  while (list($TMPL['id'], $TMPL['real_url'], $TMPL['title'], $TMPL['description'], $TMPL['urlbanner']) = $db->FetchArray($result)) {
    $TMPL['url'] = $CONFIG['list_url']."/out.php?id=".$TMPL['id'];
    $TMPL['sites'] .= "<a href=\"".$TMPL['url']."\" target=\"_blank\">".$TMPL['title']."</a><br />\n";
  }

  $LNG['ssi_newmembers'] = sprintf($LNG['ssi_newmembers'], $TMPL['num']);

  echo do_template("ssi_newmembers");
}

$db->Close;
?>