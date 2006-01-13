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
  function stats() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['stats_header'];

    $TMPL['username'] = $DB->escape($FORM['u']);

    $row = $DB->fetch("SELECT *
                       FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats
                       WHERE sites.username = stats.username AND sites.username = '{$TMPL['username']}'", __FILE__, __LINE__);
    if ($row) {
      $TMPL = array_merge($TMPL, $row);

      $TMPL['header'] .= " - {$TMPL['title']}";

      $TMPL['average_rating'] = $TMPL['num_ratings'] > 0 ? round($TMPL['total_rating'] / $TMPL['num_ratings'], 0) : 0;

      $ranking_periods = array('daily', 'weekly', 'monthly');
      $ranking_methods = array('unq_pv', 'tot_pv', 'unq_in', 'tot_in', 'unq_out', 'tot_out');
      foreach ($ranking_periods as $ranking_period) {
        foreach ($ranking_methods as $ranking_method) {
          $TMPL["{$ranking_method}_avg_{$ranking_period}"] = 0;
          for ($i = 0; $i < 10; $i++) {
            $TMPL["{$ranking_method}_avg_{$ranking_period}"] = $TMPL["{$ranking_method}_avg_{$ranking_period}"] + $TMPL["{$ranking_method}_{$i}_{$ranking_period}"];
          }
          $TMPL["{$ranking_method}_avg_{$ranking_period}"] = $TMPL["{$ranking_method}_avg_{$ranking_period}"] / 10;
        }
      }

      for ($i = 2; $i < 10; $i++) {
        $TMPL["{$i}_daily"] = date('M j', time()-3600*24*$i + (3600*$CONF['time_offset']));
      }
      for ($i = 2; $i < 10; $i++) {
        $TMPL["{$i}_weekly"] = "{$LNG['stats_week']} ".date('W', time()-3600*24*7*$i + (3600*$CONF['time_offset']));
      }
      for ($i = 2; $i < 10; $i++) {
        $TMPL["{$i}_monthly"] = date('M y', mktime(0, 0, 0, date('m')-$i, 1));
      }

      $TMPL['unq_pv_max_daily'] = $TMPL['unq_pv_0_daily'] > $TMPL['unq_pv_max_daily'] ? $TMPL['unq_pv_0_daily'] : $TMPL['unq_pv_max_daily'];
      $TMPL['tot_pv_max_daily'] = $TMPL['tot_pv_0_daily'] > $TMPL['tot_pv_max_daily'] ? $TMPL['tot_pv_0_daily'] : $TMPL['tot_pv_max_daily'];
      $TMPL['unq_in_max_daily'] = $TMPL['unq_in_0_daily'] > $TMPL['unq_in_max_daily'] ? $TMPL['unq_in_0_daily'] : $TMPL['unq_in_max_daily'];
      $TMPL['tot_in_max_daily'] = $TMPL['tot_in_0_daily'] > $TMPL['tot_in_max_daily'] ? $TMPL['tot_in_0_daily'] : $TMPL['tot_in_max_daily'];
      $TMPL['unq_out_max_daily'] = $TMPL['unq_out_0_daily'] > $TMPL['unq_out_max_daily'] ? $TMPL['unq_out_0_daily'] : $TMPL['unq_out_max_daily'];
      $TMPL['tot_out_max_daily'] = $TMPL['tot_out_0_daily'] > $TMPL['tot_out_max_daily'] ? $TMPL['tot_out_0_daily'] : $TMPL['tot_out_max_daily'];
      $TMPL['unq_pv_max_weekly'] = $TMPL['unq_pv_0_weekly'] > $TMPL['unq_pv_max_weekly'] ? $TMPL['unq_pv_0_weekly'] : $TMPL['unq_pv_max_weekly'];
      $TMPL['tot_pv_max_weekly'] = $TMPL['tot_pv_0_weekly'] > $TMPL['tot_pv_max_weekly'] ? $TMPL['tot_pv_0_weekly'] : $TMPL['tot_pv_max_weekly'];
      $TMPL['unq_in_max_weekly'] = $TMPL['unq_in_0_weekly'] > $TMPL['unq_in_max_weekly'] ? $TMPL['unq_in_0_weekly'] : $TMPL['unq_in_max_weekly'];
      $TMPL['tot_in_max_weekly'] = $TMPL['tot_in_0_weekly'] > $TMPL['tot_in_max_weekly'] ? $TMPL['tot_in_0_weekly'] : $TMPL['tot_in_max_weekly'];
      $TMPL['unq_out_max_weekly'] = $TMPL['unq_out_0_weekly'] > $TMPL['unq_out_max_weekly'] ? $TMPL['unq_out_0_weekly'] : $TMPL['unq_out_max_weekly'];
      $TMPL['tot_out_max_weekly'] = $TMPL['tot_out_0_weekly'] > $TMPL['tot_out_max_weekly'] ? $TMPL['tot_out_0_weekly'] : $TMPL['tot_out_max_weekly'];
      $TMPL['unq_pv_max_monthly'] = $TMPL['unq_pv_0_monthly'] > $TMPL['unq_pv_max_monthly'] ? $TMPL['unq_pv_0_monthly'] : $TMPL['unq_pv_max_monthly'];
      $TMPL['tot_pv_max_monthly'] = $TMPL['tot_pv_0_monthly'] > $TMPL['tot_pv_max_monthly'] ? $TMPL['tot_pv_0_monthly'] : $TMPL['tot_pv_max_monthly'];
      $TMPL['unq_in_max_monthly'] = $TMPL['unq_in_0_monthly'] > $TMPL['unq_in_max_monthly'] ? $TMPL['unq_in_0_monthly'] : $TMPL['unq_in_max_monthly'];
      $TMPL['tot_in_max_monthly'] = $TMPL['tot_in_0_monthly'] > $TMPL['tot_in_max_monthly'] ? $TMPL['tot_in_0_monthly'] : $TMPL['tot_in_max_monthly'];
      $TMPL['unq_out_max_monthly'] = $TMPL['unq_out_0_monthly'] > $TMPL['unq_out_max_monthly'] ? $TMPL['unq_out_0_monthly'] : $TMPL['unq_out_max_monthly'];
      $TMPL['tot_out_max_monthly'] = $TMPL['tot_out_0_monthly'] > $TMPL['tot_out_max_monthly'] ? $TMPL['tot_out_0_monthly'] : $TMPL['tot_out_max_monthly'];

      $query = "SELECT id, date, review FROM {$CONF['sql_prefix']}_reviews WHERE username = '{$TMPL['username']}' AND active = 1";
      if (isset($FORM['all_reviews']) && $FORM['all_reviews']) {
        $result = $DB->query("{$query} ORDER BY date DESC", __FILE__, __LINE__);
      }
      else {
        $result = $DB->select_limit("{$query} ORDER BY RAND()", 2, 0, __FILE__, __LINE__);
      }
      $TMPL['reviews'] = '';
      while (list($TMPL['id'], $TMPL['date'], $TMPL['review']) = $DB->fetch_array($result)) {
        $TMPL['reviews'] .= $this->do_skin('stats_review');
      }

      $TMPL['content'] = $this->do_skin('stats');
    }
    else {
      $this->error($LNG['g_invalid_u']);
    }
  }
}
?>
