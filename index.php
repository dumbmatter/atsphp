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
$TMPL['version'] = '5.0.2';
// Set to 1 to display SQL queries and GET/POST/COOKIE data
$CONF['debug'] = 0;

// Require some classes and start the timer
require_once("{$CONF['path']}/sources/misc/classes.php");
$TIMER = new timer;

// Connect to the database
// Set the last argument of $DB->connect to 1 to enable debug mode
require_once("{$CONF['path']}/settings_sql.php");
require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
$DB = new sql;
$DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database'], $CONF['debug']);

// Settings
$settings = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_settings", __FILE__, __LINE__);
$CONF = array_merge($CONF, $settings);

$ad_breaks = explode(',', $CONF['ad_breaks']);
$CONF['ad_breaks'] = array();
foreach ($ad_breaks as $key => $value) {
  $CONF['ad_breaks'][$value] = $value;
}

$result = $DB->query("SELECT category, skin FROM {$CONF['sql_prefix']}_categories ORDER BY category", __FILE__, __LINE__);
while (list($category, $skin) = $DB->fetch_array($result)) {
  $CONF['categories'][$category] = $skin;
}

$CONF['skins_path'] = "{$CONF['path']}/skins";
$CONF['skins_url'] = "{$CONF['list_url']}/skins";
$TMPL['skins_url'] = $CONF['skins_url'];
$TMPL['list_name'] = $CONF['list_name'];
$TMPL['list_url'] = $CONF['list_url'];

// Combine the GET and POST input
$FORM = array_merge($_GET, $_POST);

// The language file
require_once("{$CONF['path']}/languages/{$CONF['default_language']}.php");

// Determine the category and skin
if (isset($FORM['cat']) && isset($CONF['categories'][$FORM['cat']])) {
  $TMPL['skin_name'] = $CONF['categories'][$FORM['cat']];
}
else {
  $TMPL['skin_name'] = $CONF['default_skin'];
}
if (!is_dir("{$CONF['path']}/skins/{$TMPL['skin_name']}/") || !$TMPL['skin_name']) {
  $TMPL['skin_name'] = $CONF['default_skin'];
}
if (!is_dir("{$CONF['path']}/skins/{$CONF['default_skin']}/")) {
  $TMPL['skin_name'] = 'fusion';
}
require_once("{$CONF['path']}/sources/misc/skin.php");

// Is it a new day/week/month?
list($last_new_day, $last_new_week, $last_new_month) = $DB->fetch("SELECT last_new_day, last_new_week, last_new_month FROM {$CONF['sql_prefix']}_etc", __FILE__, __LINE__);
$time = time() + (3600*$CONF['time_offset']);
$current_day = date('d', $time);
$current_week = date('W', $time);
$current_month = date('m', $time);
if ($last_new_day != $current_day) {
  require_once("{$CONF['path']}/sources/misc/new_day.php");
  new_day($current_day);
}
if ($last_new_week != $current_week) {
  require_once("{$CONF['path']}/sources/misc/new_day.php");
  new_week($current_week);
}
if ($last_new_month != $current_month) {
  require_once("{$CONF['path']}/sources/misc/new_day.php");
  new_month($current_month);
}

// Adjust the output text based on days, weeks, or months
if ($CONF['ranking_period'] == 'weekly') {
  $LNG['g_this_period'] = $LNG['g_this_week'];
  $LNG['g_last_period'] = $LNG['g_last_week'];
}
elseif ($CONF['ranking_period'] == 'monthly') {
  $LNG['g_this_period'] = $LNG['g_this_month'];
  $LNG['g_last_period'] = $LNG['g_last_month'];
}
else {
  $LNG['g_this_period'] = $LNG['g_today'];
  $LNG['g_last_period'] = $LNG['g_yesterday'];
}

// Check if installer is there
if (file_exists("{$CONF['path']}/install/")) {
  $TMPL['header'] = $LNG['g_error'];
  $base = new base;
  $base->error($LNG['g_delete_install']);
}

// Check for hits in
require_once("{$CONF['path']}/sources/in.php");
$in = new in;

// Array containing the valid .php files from the sources directory
$action = array(
            'admin' => 1,
            'in' => 1,
            'join' => 1,
            'lost_pw' => 1,
            'out' => 1,
            'rankings' => 1,
            'rate' => 1,
            'search' => 1,
            'stats' => 1,
            'user_cp' => 1
          );

// Require the appripriate file
if (isset($FORM['a']) && isset($action[$FORM['a']])) {
  $page_name = $FORM['a'];
}
else {
  $page_name = 'rankings';
}
require_once("{$CONF['path']}/sources/{$page_name}.php");
$page = new $page_name;

// Display the page
$skin = new main_skin('wrapper');
echo $skin->make();

$DB->close();

// Print out debugging info, if necessary
if ($CONF['debug']) {
  echo '<div style="clear: both;">';
  foreach ($DB->queries as $value) {
    echo "<hr /><pre>{$value}</pre>";
  }
  echo '<hr /><pre>';
  print_r($_REQUEST);
  echo '</pre>';
  echo '</div>';
}
?>
