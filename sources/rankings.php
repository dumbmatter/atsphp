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

class rankings extends base {
  function rankings() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    // Get the category, default to no category
    if (isset($FORM['cat']) && $FORM['cat']) {
      $TMPL['category'] = $FORM['cat'];
      $category_sql = "AND category = '{$TMPL['category']}'";
    }
    else {
      $TMPL['category'] = $LNG['main_all'];
      $category_sql = '';
    }

    $TMPL['header'] = "{$LNG['main_header']} - {$TMPL['category']}";

    // Get the ranking method, default to pageviews
    $ranking_method = isset($FORM['method']) ? $FORM['method'] : $CONF['ranking_method'];
    if (($ranking_method != 'pv') && ($ranking_method != 'in') && ($ranking_method != 'out')) {
      $ranking_method = 'pv';
    }

    // Make ORDER BY clause
    $order_by = $this->rank_by($ranking_method)." DESC";

    // Figure out what rows we want, and SELECT them
    if (isset($FORM['start'])) {
      $start = intval($FORM['start']);
      if ($start > 0) {
        $start--;
      }
    }
    else {
      $start = 0;
    }

    $result = $DB->select_limit("SELECT *
                                 FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats
                                 WHERE sites.username = stats.username AND active = 1 {$category_sql}
                                 ORDER BY {$order_by}
                                ", $CONF['num_list'], $start, __FILE__, __LINE__);

    if ($CONF['ranking_period'] == 'overall') {
      $ranking_period = 'daily';
    }
    else {
      $ranking_period = $CONF['ranking_period'];
    }
    if ($TMPL['category'] == $LNG['main_all']) {
      $is_main = 1;
    }
    else {
      $is_main = 0;
    }
    $TMPL['rank'] = $start + 1;
    $page_rank = 1;
    $top_done = 0;
    $do_table_open = 0;
    $TMPL['alt'] = 'alt';

    if ($DB->num_rows($result)) {
      // Start the output with table_top_open if we're on the first page
      if ($CONF['top_skin_num'] > 0 && (!isset($FORM['start']) || $FORM['start'] <= 1)) {
        $TMPL['content'] = $this->do_skin('table_top_open');
      }
      else {
        $TMPL['content'] = $this->do_skin('table_open');
      }

      while ($row = $DB->fetch_array($result)) {
        $TMPL = array_merge($TMPL, $row);
        if ($CONF['ranking_method'] == $ranking_method && $is_main) {
          if (!$TMPL['old_rank']) {
            $TMPL['old_rank'] = $TMPL['rank'];
            $DB->query("UPDATE {$CONF['sql_prefix']}_stats SET old_rank = {$TMPL['old_rank']} WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
          }
          if ($TMPL['old_rank'] > $TMPL['rank']) { $TMPL['up_down'] = 'up'; $LNG['up_down'] = $LNG['table_up']; }
          elseif ($TMPL['old_rank'] < $TMPL['rank']) { $TMPL['up_down'] = 'down'; $LNG['up_down'] = $LNG['table_down']; }
          else { $TMPL['up_down'] = 'neutral'; $LNG['up_down'] = $LNG['table_neutral']; }
        }
        else { $TMPL['up_down'] = 'neutral'; $LNG['up_down'] = $LNG['table_neutral']; }
        if ($TMPL['alt']) { $TMPL['alt'] = ''; }
        else { $TMPL['alt'] = 'alt'; }

        $TMPL['average_rating'] = $TMPL['num_ratings'] > 0 ? round($TMPL['total_rating'] / $TMPL['num_ratings'], 0) : 0;

        $ranking_periods = array('daily', 'weekly', 'monthly');
        $ranking_methods = array('unq_pv', 'tot_pv', 'unq_in', 'tot_in', 'unq_out', 'tot_out');
        foreach ($ranking_periods as $ranking_period2) {
          foreach ($ranking_methods as $ranking_method2) {
            $TMPL["{$ranking_method2}_avg_{$ranking_period2}"] = 0;
            for ($i = 0; $i < 10; $i++) {
              $TMPL["{$ranking_method2}_avg_{$ranking_period2}"] = $TMPL["{$ranking_method2}_avg_{$ranking_period2}"] + $TMPL["{$ranking_method2}_{$i}_{$ranking_period2}"];
            }
            $TMPL["{$ranking_method2}_avg_{$ranking_period2}"] = $TMPL["{$ranking_method2}_avg_{$ranking_period2}"] / 10;
          }
        }

        $TMPL['this_period'] = $TMPL["unq_{$ranking_method}_0_{$ranking_period}"];
        $TMPL['average'] = 0;
        for ($i = 0; $i < 10; $i++) {
          $TMPL['average'] = $TMPL['average'] + $TMPL["unq_{$ranking_method}_{$i}_{$ranking_period}"];
        }
        $TMPL['average'] = $TMPL['average'] / 10;

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

        // Only use _top skin on the first page
        if ($page_rank <= $CONF['top_skin_num'] && (!isset($FORM['start']) || $FORM['start'] <= 1)) {
          $TMPL['content'] .= $this->do_skin('table_top_row');
          $is_top = 1;
        }
        else {
          // This sees if $do_table_open had been set during the last loop.  If so,
          // a new table_open is printed.  This keeps a table_open form being the
          // last thing on the page when there is an ad break at the end.
          if ($do_table_open) {
            $TMPL['content'] .= $this->do_skin('table_open');
            $do_table_open = 0;
          }

          $TMPL['content'] .= $this->do_skin('table_row');
          $top_done = 1;
        }
        if ($page_rank == $CONF['top_skin_num'] && (!isset($FORM['start']) || $FORM['start'] <= 1)) {
          $TMPL['content'] .= $this->do_skin('table_top_close');
          $do_table_open = 1;
        }

        if (isset($CONF['ad_breaks'][$page_rank])) {
          if (isset($is_top) && $is_top) {
            $TMPL['content'] .= $this->do_skin('table_top_close');
            $TMPL['content'] .= $this->do_skin('ad_break_top');
            $TMPL['content'] .= $this->do_skin('table_top_open');
          }
          else {
            $TMPL['content'] .= $this->do_skin('table_close');
            $TMPL['content'] .= $this->do_skin('ad_break');
            $do_table_open = 1;
          }
        }

        $is_top = 0;
        $TMPL['rank']++;
        $page_rank++;
      }

      if ($top_done) {
        $TMPL['content'] .= $this->do_skin('table_close');
      }
      elseif (!$do_table_open) {
        $TMPL['content'] .= $this->do_skin('table_top_close');
      }
    }
  }
}
?>
