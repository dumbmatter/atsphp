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

class stats extends base {
  function __construct() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['stats_header'];

    $TMPL['username'] = $DB->escape($FORM['u']);

    $row = $DB->fetch("SELECT *
                       FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats
                       WHERE sites.username = stats.username AND sites.username = '{$TMPL['username']}'", __FILE__, __LINE__);
    $TMPL = array_merge($TMPL, $row);

    $TMPL['average_rating'] = $TMPL['num_ratings'] > 0 ? round($TMPL['total_rating'] / $TMPL['num_ratings'], 0) : 0;

    $ranking_methods = array('unq_pv', 'tot_pv', 'unq_in', 'tot_in', 'unq_out', 'tot_out');
    foreach ($ranking_methods as $ranking_method) {
      $TMPL["{$ranking_method}_avg_daily"] = 0;
      for ($i = 0; $i < $CONF['daily_weekly_monthly_num']; $i++) {
        $TMPL["{$ranking_method}_avg_daily"] = $TMPL["{$ranking_method}_avg_daily"] + $TMPL["{$ranking_method}_{$i}_daily"];
      }
      $TMPL["{$ranking_method}_avg_daily"] = $TMPL["{$ranking_method}_avg_daily"] / $CONF['daily_weekly_monthly_num'];
    }

    for ($i = 2; $i < 10; $i++) {
      $TMPL["{$i}_daily"] = date('F j', time()-3600*24*$i);
    }

    $query = "SELECT id, date, review FROM {$CONF['sql_prefix']}_reviews WHERE username = '{$TMPL['username']}' ORDER BY date DESC";
    if (isset($FORM['all_reviews']) && $FORM['all_reviews']) {
      $result = $DB->execute($query, __FILE__, __LINE__);
    }
    else {
      $result = $DB->select_limit($query, 5, 0, __FILE__, __LINE__);
    }
    $TMPL['reviews'] = '';
    while (list($id, $date, $review) = $DB->fetch_array($result)) {
      $TMPL['reviews'] .= "<b>{$id} - {$date}</b><br />\n{$review}<br /><br />\n";
    }

    $TMPL['content'] = $this->do_skin('stats');
  }
}
?>
