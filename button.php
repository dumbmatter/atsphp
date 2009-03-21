<?php
//===========================================================================\\
// Aardvark Topsites PHP 5.2                                                 \\
// Copyright (c) 2000-2009 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarktopsitesphp.com/                http://www.avatic.com/ \\
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

// Help prevent register_globals injection
define('ATSPHP', 1);
$CONF = array();
$FORM = array();
$TMPL = array();

// Change the path to your full path if necessary
$CONF['path'] = '.';

// Connect to the database
require_once("{$CONF['path']}/settings_sql.php");
require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
$DB = "sql_{$CONF['sql']}";
$DB = new $DB;
$DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database']);

// Settings
$settings = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_settings", __FILE__, __LINE__);
$CONF = array_merge($CONF, $settings);

// Check id for backwards compatability with 4.x
if (isset($_GET['id']) && $_GET['id'] && !isset($_GET['u'])) {
  $username = $DB->escape($_GET['id']);
}
else {
  $username = $DB->escape($_GET['u']);
}

// Is this a valid member?  If not, exit to stop leechers
list($test) = $DB->fetch("SELECT active FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username}'", __FILE__, __LINE__);
if (!$test && (isset($_GET['u']) || isset($_GET['id']))) {
  exit;
}

// Is this a unique hit?
$ip = $DB->escape($_SERVER['REMOTE_ADDR'], 1);
list($ip_sql, $unq_pv) = $DB->fetch("SELECT ip_address, unq_pv FROM {$CONF['sql_prefix']}_ip_log WHERE ip_address = '$ip' AND username = '{$username}'", __FILE__, __LINE__);

$unique_sql = ', unq_pv_overall = unq_pv_overall + 1, unq_pv_0_daily = unq_pv_0_daily + 1, unq_pv_0_weekly = unq_pv_0_weekly + 1, unq_pv_0_monthly = unq_pv_0_monthly + 1';
if ($ip == $ip_sql && $unq_pv == 0) {
  $DB->query("UPDATE {$CONF['sql_prefix']}_ip_log SET unq_pv = 1 WHERE ip_address = '{$ip}' AND username = '{$username}'", __FILE__, __LINE__);
}
elseif ($ip != $ip_sql) {
  $DB->query("INSERT INTO {$CONF['sql_prefix']}_ip_log (ip_address, username, unq_pv) VALUES ('{$ip}', '{$username}' ,1)", __FILE__, __LINE__);
}
else {
  $unique_sql = '';
}

// Update stats
$DB->query("UPDATE {$CONF['sql_prefix']}_stats SET tot_pv_overall = tot_pv_overall + 1, tot_pv_0_daily = tot_pv_0_daily + 1, tot_pv_0_weekly = tot_pv_0_weekly + 1, tot_pv_0_monthly = tot_pv_0_monthly + 1{$unique_sql} WHERE username = '{$username}'", __FILE__, __LINE__);

// What button to display?
$rank_on_button = 0;
if ($CONF['ranks_on_buttons']) {
  // See if rank is freshly cached.  If so, use cached value.  If not, calculate rank.
  list($rank_cache, $rank_cache_time) = $DB->fetch("SELECT rank_cache, rank_cache_time FROM {$CONF['sql_prefix']}_stats WHERE username = '{$username}'", __FILE__, __LINE__);

  $current_time = time();
  if (($current_time - 1800) < $rank_cache_time) { // Cache every 30 minutes.  1800 is the number of seconds to cache.  Change it if you want.
    if ($rank_cache > 0 && $rank_cache <= $CONF['button_num']) {
      $rank = $rank_cache;
      $location = "{$CONF['button_dir']}/{$rank}.{$CONF['button_ext']}";
      $rank_on_button = 1;
    }
  }
  else {
    require_once "{$CONF['path']}/sources/misc/classes.php";
    $rank_by = base::rank_by();

    list($hits) = $DB->fetch("SELECT {$rank_by} FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats WHERE sites.username = stats.username AND active = 1 AND sites.username = '{$username}'", __FILE__, __LINE__);
    if ($hits) {
      list($rank) = $DB->fetch("SELECT count(*) FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats WHERE sites.username = stats.username AND active = 1 AND ({$rank_by}) >= $hits", __FILE__, __LINE__);

      $new_rank_cache = 0;
      if ($rank <= $CONF['button_num']) {
        $location = "{$CONF['button_dir']}/{$rank}.{$CONF['button_ext']}";
        $rank_on_button = 1;

        $new_rank_cache = $rank;
      }
    }
    if ($new_rank_cache) {
      $DB->query("UPDATE {$CONF['sql_prefix']}_stats SET rank_cache = {$new_rank_cache}, rank_cache_time = {$current_time} WHERE username = '{$username}'", __FILE__, __LINE__);
    }
  }

  // Stat Buttons
  if ($CONF['ranks_on_buttons'] == 2) {
    require_once "{$CONF['path']}/settings_buttons.php";
    exit;
  }
}

$DB->close();

if (!$rank_on_button) {
  $location = $CONF['button_url'];
}

header("Location: {$location}");
?>
