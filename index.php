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

// Change the path to your full path if necessary
$CONF['path'] = '.';
$TMPL['version'] = '5.0 Alpha (2005-07-08)';

// Require some classes and start the timer
require_once $CONF['path'].'/sources/misc/classes.php';
$timer = new timer;

// Connect to the database
// Set the last argument of $DB->connect to 1 to enable debug mode
require_once $CONF['path'].'/settings_sql.php';
require_once $CONF['path'].'/sources/drivers/'.$CONF['sql'].'.php';
$DB = new sql;
$DB->connect($CONF['sql_host'], $CONF['sql_user'], $CONF['sql_password'], $CONF['sql_database'], 0);

// Settings
$result = $DB->execute('SELECT list_name, list_url, default_language, default_skin, skins_url, email_address, num_list, day_week_month, day_week_month_num, ranking_method, featured_member, top_skin_num, ad_breaks, active_default, delete_after, email_admin_on_join, max_banner_width, max_banner_height, default_banner, ranks_on_buttons, button_url, button_dir, button_ext, button_num, search, search_results, gzip, time_offset, gateway FROM '.$CONF['sql_prefix'].'_settings');
$CONF = $DB->fetch_array($result);
$ad_breaks = explode('|', $CONF['ad_breaks']);
$CONF['ad_breaks'] = array();
foreach ($ad_breaks as $key => $value) {
  $CONF['ad_breaks'][$value] = 1;
}
$result = $DB->execute('SELECT category, skin FROM '.$CONF['sql_prefix'].'_categories');
while (list($category, $skin) = $DB->fetch_array($result)) {
  $CONF['categories'][$category] = $skin;
}

// Combine the GET and POST input
$FORM = array_merge($_GET, $_POST);

// The language file
require_once $CONF['path'].'/languages/'.$CONF['default_language'].'.php';

// Determine the category
if (isset($CONF['categories'][$FORM['cat']])) {
  $TMPL['skin_name'] = $CONF['categories'][$FORM['cat']];
}
else {
  $TMPL['skin_name'] = $CONF['default_skin'];
}
if (!is_dir($CONF['path'].'/skins/'.$TMPL['skin_name'])) {
  $TMPL['skin_name'] = $CONF['default_skin'];
}
require_once $CONF['path'].'/sources/misc/skin.php';

// Is it a new day/week/month?
/*$result = $DB->execute('SELECT last_new_day FROM '.$CONF['sql_prefix'].'_etc');
list($last_new_day) = $DB->fetch_array($result);
$time = time() + (3600 * $CONF['time_offset']);
if ($CONF['day_week_month'] == 'week') {
  $current_day = date('W', $time);
}
elseif ($CONF['day_week_month'] == 'month') {
  $current_day = date('m', $time);
}
else {
  $current_day = date('d', $time);
}
if ($last_new_day != $current_day) {
    require_once $CONF['path'].'/sources/misc/new_day.php';
}*/

// Adjust the output text based on days, weeks, or months
if ($CONF['day_week_month'] == 'week' || $CONF['day_week_month'] == 'month') {
  $LNG['g_today'] = $LNG['g_this'.$CONF['day_week_month']];
  $LNG['g_yesterday'] = $LNG['g_last'.$CONF['day_week_month']];
  $LNG['g_2days'] = $LNG['g_2'.$CONF['day_week_month'].'s'];
  $LNG['g_3days'] = $LNG['g_3'.$CONF['day_week_month'].'s'];
}

// gzip
if ($CONF['gzip']) { ob_start('ob_gzhandler'); }

// Array containing the valid .php files from the sources directory
$action = array(
            'edit' => 1,
            'email' => 1,
            'graph' => 1,
            'join' => 1,
            'lost_code' => 1,
            'lost_password' => 1,
            'rankings' => 1,
            'rate' => 1,
            'search' => 1,
            'stats' => 1
          );

// Require the appripriate file
$page_name = isset($action[$FORM['a']]) ? $FORM['a'] : 'rankings';
require_once $CONF['path'].'/sources/'.$page_name.'.php';
$page = new $page_name;

// Get some data to display in the skin
$TMPL['queries'] = $DB->get_num_queries();
$TMPL['executiontime'] = $timer->get_time();

// Display the page
$skin = new main_skin('wrapper');
echo $skin->make();

$DB->close;

// Print out debugging info, if necessary
if ($DB->get_debug()) {
  $queries = $DB->get_queries();

  echo '<div style="margin: 2px;">';
  foreach ($queries as $value) {
    echo '<hr />$value';
  }
  echo '</div>';
}
?>
