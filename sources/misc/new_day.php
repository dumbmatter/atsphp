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

$DB->query("TRUNCATE TABLE {$CONFIG['sql_prefix']}_iplog");

$DB->query("UPDATE {$CONFIG['sql_prefix']}_etc SET last_newday = {$current_day}");

$DB->query("UPDATE {$CONFIG['sql_prefix']}_stats SET days_inactive = days_inactive + 1 WHERE tot_pv_today = 0 AND tot_in_today = 0");

$DB->query("UPDATE {$CONFIG['sql_prefix']}_stats SET days_inactive = 0 WHERE tot_pv_today > 0 OR tot_in_today > 0");

if ($CONF['delete_after'] > 0) {
  $result = $DB->query("SELECT id FROM {$CONFIG['sql_prefix']}_stats WHERE days_inactive >= {$CONFIG['delete_after']}");
  for ($count = 0; list($id) = $db->fetch_array($result); $count++) {
    if ($count == 0) {
      $delete_ids = $id;
    }
    else {
      $delete_ids .= ", {$id}";
    }
  }

  if ($count != 0) {
    $DB->query("DELETE FROM {$CONFIG['sql_prefix']}_members WHERE id IN({$delete_ids})");
    $DB->query("DELETE FROM {$CONFIG['sql_prefix']}_stats WHERE id IN({$delete_ids})");
    $DB->query("DELETE FROM {$CONFIG['sql_prefix']}_reviews WHERE id IN({$delete_ids})");
  }
}

$DB->query("UPDATE {$CONFIG['sql_prefix']}_stats SET unq_pv_3 = unq_pv_2, unq_pv_2 = unq_pv_1, unq_pv_1 = unq_pv_today, unq_pv_today = 0,
                                                         tot_pv_3 = tot_pv_2, tot_pv_2 = tot_pv_1, tot_pv_1 = tot_pv_today, tot_pv_today = 0,
                                                         unq_in_3 = unq_in_2, unq_in_2 = unq_in_1, unq_in_1 = unq_in_today, unq_in_today = 0,
                                                         tot_in_3 = tot_in_2, tot_in_2 = tot_in_1, tot_in_1 = tot_in_today, tot_in_today = 0,
                                                         unq_out_3 = unq_out_2, unq_out_2 = unq_out_1, unq_out_1 = unq_out_today, unq_out_today = 0,
                                                         tot_out_3 = tot_out_2, tot_out_2 = tot_out_1, tot_out_1 = tot_out_today, tot_out_today = 0,
                                                         old_rank = 0");
?>
