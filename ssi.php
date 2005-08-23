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

// Change the path to your full path if necessary
$CONF['path'] = '.';

// Connect to the database
require_once("{$CONF['path']}/settings_sql.php");
require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
$DB = new sql;
$DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database']);

// Settings
$settings = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_settings", __FILE__, __LINE__);
$CONF = array_merge($CONF, $settings);

$CONF['skins_path'] = "{$CONF['path']}/skins";
$CONF['skins_url'] = "{$CONF['list_url']}/skins";
$TMPL['skins_url'] = $CONF['skins_url'];
$TMPL['list_name'] = $CONF['list_name'];
$TMPL['list_url'] = $CONF['list_url'];

// Combine the GET and POST input
$FORM = array_merge($_GET, $_POST);

// The language file
require_once("{$CONF['path']}/languages/{$CONF['default_language']}.php");

// The skin
$TMPL['skin_name'] = $CONF['default_skin'];
require_once("{$CONF['path']}/sources/misc/skin.php");

if (isset($FORM['a']) && $FORM['a'] == 'new') {
  if (isset($FORM['num'])) {
    $TMPL['num'] = intval($FORM['num']);
  }
  if (!isset($TMPL['num']) || !$TMPL['num']) {
    $TMPL['num'] = 5;
  }

  $TMPL['sites'] = '';

  $result = $DB->select_limit("SELECT *
                               FROM {$CONF['sql_prefix']}_sites
                               WHERE active = 1
                               ORDER BY join_date DESC
                              ", $TMPL['num'], 0, __FILE__, __LINE__);

  while ($row = $DB->fetch_array($result)) {
    $TMPL = array_merge($TMPL, $row);

    $skin = new skin('ssi_new_row');
    $TMPL['sites'] .= $skin->make();
  }

  $LNG['ssi_new'] = sprintf($LNG['ssi_new'], $TMPL['num']);

  $skin = new skin('ssi_new');
}
else {
  if (isset($FORM['num'])) {
    $TMPL['num'] = intval($FORM['num']);
  }
  if (!isset($TMPL['num']) || !$TMPL['num']) {
    $TMPL['num'] = 5;
  }

  $TMPL['sites'] = '';

  require_once("{$CONF['path']}/sources/misc/classes.php");
  $order_by = base::rank_by()." DESC";

  $result = $DB->select_limit("SELECT *
                               FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats
                               WHERE sites.username = stats.username AND active = 1
                               ORDER BY {$order_by}
                              ", $TMPL['num'], 0, __FILE__, __LINE__);

  while ($row = $DB->fetch_array($result)) {
    $TMPL = array_merge($TMPL, $row);

    $skin = new skin('ssi_top_row');
    $TMPL['sites'] .= $skin->make();
  }

  $LNG['ssi_top'] = sprintf($LNG['ssi_top'], $TMPL['num']);

  $skin = new skin('ssi_top');
}

echo $skin->make();

$DB->close();
?>
