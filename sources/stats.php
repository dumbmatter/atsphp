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

if (!defined('ATSPHP')) {
  die("This file cannot be accessed directly.");
}

class stats extends base {
  function stats() {
    global $FORM;

    if (isset($FORM['u'])) { $stats = new stats_site; }
    else { $stats = new stats_overall; }
  }

  function averages() {
    global $TMPL;

    $ranking_periods = array('daily', 'weekly', 'monthly');
    $ranking_methods = array('unq_pv', 'tot_pv', 'unq_in', 'tot_in', 'unq_out', 'tot_out');
    foreach ($ranking_periods as $ranking_period) {
      foreach ($ranking_methods as $ranking_method) {
        $TMPL["{$ranking_method}_avg_{$ranking_period}"] = 0;
        for ($i = 0; $i < 10; $i++) {
          $TMPL["{$ranking_method}_avg_{$ranking_period}"] = $TMPL["{$ranking_method}_avg_{$ranking_period}"] + $TMPL["{$ranking_method}_{$i}_{$ranking_period}"];
        }
        $TMPL["{$ranking_method}_avg_{$ranking_period}"] = number_format($TMPL["{$ranking_method}_avg_{$ranking_period}"] / 10, 1);
      }
    }
  }

  function locale() {
    global $CONF, $LNG, $TMPL;

    setlocale(LC_ALL, $CONF['default_language']);
    for ($i = 2; $i < 10; $i++) {
      $TMPL["{$i}_daily"] = strftime('%B %d', time()-3600*24*$i + (3600*$CONF['time_offset']));
    }
    for ($i = 2; $i < 10; $i++) {
      $TMPL["{$i}_weekly"] = "{$LNG['stats_week']} ".date('W', time()-3600*24*7*$i + (3600*$CONF['time_offset']));
    }
    for ($i = 2; $i < 10; $i++) {
      $TMPL["{$i}_monthly"] = strftime('%B %y', mktime(0, 0, 0, date('m')-$i, 1));
    }
  }
}

class stats_site extends stats {
  function stats_site() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['stats_header'];

    $TMPL['username'] = $DB->escape($FORM['u'], 1);

    $stats = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_stats WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    unset($stats['username']);
    $sites = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    if ($stats) {
      $TMPL = array_merge($TMPL, $stats, $sites);

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

      $this->averages();

      $TMPL['average_rating'] = $TMPL['num_ratings'] > 0 ? round($TMPL['total_rating'] / $TMPL['num_ratings'], 0) : 0;

      $stats = array_map('number_format', $stats);
      $TMPL = array_merge($TMPL, $stats);

      $this->locale();

      $TMPL['header'] .= " - {$TMPL['title']}";
      $TMPL['category_url'] = urlencode($TMPL['category']);

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

class stats_overall extends stats {
  function stats_overall() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['stats_overall'];

    $stats = $DB->fetch("SELECT SUM(unq_pv_overall), SUM(tot_pv_overall), SUM(unq_in_overall), SUM(tot_in_overall), SUM(unq_out_overall), SUM(tot_out_overall),
                         SUM(unq_pv_0_daily), SUM(unq_pv_1_daily), SUM(unq_pv_2_daily), SUM(unq_pv_3_daily), SUM(unq_pv_4_daily), SUM(unq_pv_5_daily), SUM(unq_pv_6_daily), SUM(unq_pv_7_daily), SUM(unq_pv_8_daily), SUM(unq_pv_9_daily), SUM(tot_pv_0_daily), SUM(tot_pv_1_daily), SUM(tot_pv_2_daily), SUM(tot_pv_3_daily), SUM(tot_pv_4_daily), SUM(tot_pv_5_daily), SUM(tot_pv_6_daily), SUM(tot_pv_7_daily), SUM(tot_pv_8_daily), SUM(tot_pv_9_daily),
                         SUM(unq_in_0_daily), SUM(unq_in_1_daily), SUM(unq_in_2_daily), SUM(unq_in_3_daily), SUM(unq_in_4_daily), SUM(unq_in_5_daily), SUM(unq_in_6_daily), SUM(unq_in_7_daily), SUM(unq_in_8_daily), SUM(unq_in_9_daily), SUM(tot_in_0_daily), SUM(tot_in_1_daily), SUM(tot_in_2_daily), SUM(tot_in_3_daily), SUM(tot_in_4_daily), SUM(tot_in_5_daily), SUM(tot_in_6_daily), SUM(tot_in_7_daily), SUM(tot_in_8_daily), SUM(tot_in_9_daily),
                         SUM(unq_out_0_daily), SUM(unq_out_1_daily), SUM(unq_out_2_daily), SUM(unq_out_3_daily), SUM(unq_out_4_daily), SUM(unq_out_5_daily), SUM(unq_out_6_daily), SUM(unq_out_7_daily), SUM(unq_out_8_daily), SUM(unq_out_9_daily), SUM(tot_out_0_daily), SUM(tot_out_1_daily), SUM(tot_out_2_daily), SUM(tot_out_3_daily), SUM(tot_out_4_daily), SUM(tot_out_5_daily), SUM(tot_out_6_daily), SUM(tot_out_7_daily), SUM(tot_out_8_daily), SUM(tot_out_9_daily),
                         SUM(unq_pv_0_weekly), SUM(unq_pv_1_weekly), SUM(unq_pv_2_weekly), SUM(unq_pv_3_weekly), SUM(unq_pv_4_weekly), SUM(unq_pv_5_weekly), SUM(unq_pv_6_weekly), SUM(unq_pv_7_weekly), SUM(unq_pv_8_weekly), SUM(unq_pv_9_weekly), SUM(tot_pv_0_weekly), SUM(tot_pv_1_weekly), SUM(tot_pv_2_weekly), SUM(tot_pv_3_weekly), SUM(tot_pv_4_weekly), SUM(tot_pv_5_weekly), SUM(tot_pv_6_weekly), SUM(tot_pv_7_weekly), SUM(tot_pv_8_weekly), SUM(tot_pv_9_weekly),
                         SUM(unq_in_0_weekly), SUM(unq_in_1_weekly), SUM(unq_in_2_weekly), SUM(unq_in_3_weekly), SUM(unq_in_4_weekly), SUM(unq_in_5_weekly), SUM(unq_in_6_weekly), SUM(unq_in_7_weekly), SUM(unq_in_8_weekly), SUM(unq_in_9_weekly), SUM(tot_in_0_weekly), SUM(tot_in_1_weekly), SUM(tot_in_2_weekly), SUM(tot_in_3_weekly), SUM(tot_in_4_weekly), SUM(tot_in_5_weekly), SUM(tot_in_6_weekly), SUM(tot_in_7_weekly), SUM(tot_in_8_weekly), SUM(tot_in_9_weekly),
                         SUM(unq_out_0_weekly), SUM(unq_out_1_weekly), SUM(unq_out_2_weekly), SUM(unq_out_3_weekly), SUM(unq_out_4_weekly), SUM(unq_out_5_weekly), SUM(unq_out_6_weekly), SUM(unq_out_7_weekly), SUM(unq_out_8_weekly), SUM(unq_out_9_weekly), SUM(tot_out_0_weekly), SUM(tot_out_1_weekly), SUM(tot_out_2_weekly), SUM(tot_out_3_weekly), SUM(tot_out_4_weekly), SUM(tot_out_5_weekly), SUM(tot_out_6_weekly), SUM(tot_out_7_weekly), SUM(tot_out_8_weekly), SUM(tot_out_9_weekly),
                         SUM(unq_pv_0_monthly), SUM(unq_pv_1_monthly), SUM(unq_pv_2_monthly), SUM(unq_pv_3_monthly), SUM(unq_pv_4_monthly), SUM(unq_pv_5_monthly), SUM(unq_pv_6_monthly), SUM(unq_pv_7_monthly), SUM(unq_pv_8_monthly), SUM(unq_pv_9_monthly), SUM(tot_pv_0_monthly), SUM(tot_pv_1_monthly), SUM(tot_pv_2_monthly), SUM(tot_pv_3_monthly), SUM(tot_pv_4_monthly), SUM(tot_pv_5_monthly), SUM(tot_pv_6_monthly), SUM(tot_pv_7_monthly), SUM(tot_pv_8_monthly), SUM(tot_pv_9_monthly),
                         SUM(unq_in_0_monthly), SUM(unq_in_1_monthly), SUM(unq_in_2_monthly), SUM(unq_in_3_monthly), SUM(unq_in_4_monthly), SUM(unq_in_5_monthly), SUM(unq_in_6_monthly), SUM(unq_in_7_monthly), SUM(unq_in_8_monthly), SUM(unq_in_9_monthly),  SUM(tot_in_0_monthly), SUM(tot_in_1_monthly), SUM(tot_in_2_monthly), SUM(tot_in_3_monthly), SUM(tot_in_4_monthly), SUM(tot_in_5_monthly), SUM(tot_in_6_monthly), SUM(tot_in_7_monthly), SUM(tot_in_8_monthly), SUM(tot_in_9_monthly),
                         SUM(unq_out_0_monthly), SUM(unq_out_1_monthly), SUM(unq_out_2_monthly), SUM(unq_out_3_monthly), SUM(unq_out_4_monthly), SUM(unq_out_5_monthly), SUM(unq_out_6_monthly), SUM(unq_out_7_monthly), SUM(unq_out_8_monthly), SUM(unq_out_9_monthly), SUM(tot_out_0_monthly), SUM(tot_out_1_monthly), SUM(tot_out_2_monthly), SUM(tot_out_3_monthly), SUM(tot_out_4_monthly), SUM(tot_out_5_monthly), SUM(tot_out_6_monthly), SUM(tot_out_7_monthly), SUM(tot_out_8_monthly), SUM(tot_out_9_monthly)
                         FROM {$CONF['sql_prefix']}_stats", __FILE__, __LINE__);

    // Get rid of SUM() in array keys
    foreach ($stats as $key => $value) {
      $new_key = str_replace(array('SUM(', ')'), '', $key);
      $stats[$new_key] = $value;
      unset($stats[$key]);
    }

    $TMPL = array_merge($TMPL, $stats);

    $this->averages();

    $stats = array_map('number_format', $stats);
    $TMPL = array_merge($TMPL, $stats);

    $this->locale();

    $TMPL['content'] = $this->do_skin('stats_overall');
  }
}
?>
