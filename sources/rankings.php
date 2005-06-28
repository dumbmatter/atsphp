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

class rankings extends base {
  function __construct() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if ($FORM['cat']) {
      $TMPL['category'] = $FORM['cat'];
      $category_sql = "AND category = '${TMPL['category']}'";
    }
    else { $TMPL['category'] = $LNG['main_all']; }

    $TMPL['header'] = $LNG['main_header'].' - '.$TMPL['category'];

    $start = isset($FORM['start']) ? $FORM['start'] - 1 : 0;
    $ranking_method = isset($FORM['method']) ? $FORM['method'] : $CONF['ranking_method'];

    if (($ranking_method != 'unq_pv') && ($ranking_method != 'tot_pv') && ($ranking_method != 'unq_in') && ($ranking_method != 'tot_in') && ($ranking_method != 'unq_out') && ($ranking_method != 'tot_out')) {
      $ranking_method = 'unq_pv';
    }

    if ($CONF['top_skin_num'] > 0 && $FORM['start'] < 2) { $TMPL['content'] = do_skin('table_header_top'); }
    else { $TMPL['content'] = do_skin('table_header'); }

    $result = $DB->select_limit('SELECT id, url, title, description, category, banner_url, total_ratings, num_ratings, unq_pv_today, (unq_pv_today + unq_pv_1 + unq_pv_2 + unq_pv_3) / 4, tot_pv_today, (tot_pv_today + tot_pv_1 + tot_pv_2 + tot_pv_3) / 4, unq_in_today, (unq_in_today + unq_in_1 + unq_in_2 + unq_in_3) / 4, tot_in_today, (tot_in_today + tot_in_1 + tot_in_2 + tot_in_3) / 4, unq_out_today, (unq_out_today + unq_out_1 + unq_out_2 + unq_out_3) / 4, tot_out_today, (tot_out_today + tot_out_1 + tot_out_2 + tot_out_3) / 4, old_rank
                                 FROM '.$CONF['sql_prefix'].'_members m, '.$CONF['sql_prefix'].'_stats s
                                 WHERE m.id = s.id $category_sql AND active = 1
                                 ORDER BY ('.$ranking_method.'_today + '.$ranking_method.'_1 + '.$ranking_method.'_2 + '.$ranking_method.'_3) / 4 DESC
                                 ', $CONF['num_list'], $start);

    $TMPL['rank'] = ++$start;
    $page_rank = 1;
    $TMPL['alt'] = 'alt';
    while (list($TMPL['id'], $TMPL['real_url'], $TMPL['title'], $TMPL['description'], $TMPL['cat'], $TMPL['banner_url'], $total_ratings, $TMPL['num_ratings'], $TMPL['unq_pv_tod'], $TMPL['unq_pv_avg'], $TMPL['tot_pv_tod'], $TMPL['tot_pv_avg'], $TMPL['unq_in_tod'], $TMPL['unq_in_avg'], $TMPL['tot_in_tod'], $TMPL['tot_in_avg'], $TMPL['unq_out_tod'], $TMPL['unq_out_avg'], $TMPL['tot_out_tod'], $TMPL['tot_out_avg'], $TMPL['old_rank']) = $DB->fetch_array($result)) {
      if ($CONF['ranking_method'] == $ranking_method && $TMPL['category'] == $LNG['main_all']) {
        if (!$TMPL['old_rank']) {
          $TMPL['old_rank'] = $TMPL['rank'];
          $DB->execute('UPDATE '.$CONF['sql_prefix'].'_stats SET old_rank = '.$TMPL['old_rank'].' WHERE id2 = '.$TMPL['id']);
        }
        if ($TMPL['old_rank'] > $TMPL['rank']) { $TMPL['up_down'] = 'up'; }
        elseif ($TMPL['old_rank'] < $TMPL['rank']) { $TMPL['up_down'] = 'down'; }
        else { $TMPL['up_down'] = 'neutral'; }
      }
      else { $TMPL['up_down'] = 'neutral'; }

      if ($TMPL['alt']) { $TMPL['alt'] = ''; }
      else { $TMPL['alt'] = 'alt'; }

      $TMPL['url'] = $CONF['list_url'].'/out.php?id='.$TMPL['id'];
      $TMPL['avg_rating'] = $TMPL['num_ratings'] > 0 ? round($total_ratings / $TMPL['num_ratings'], 0) : 0;
      $TMPL['tod'] = $TMPL[$ranking_method.'_tod'];
      $TMPL['avg'] = $TMPL[$ranking_method.'_avg'];

      // Only use _top skin on the first page
      if ($page_rank <= $CONF['top_skin_num'] && $FORM['start'] <= 1) {
        $TMPL['content'] .= $this->do_skin('table_top');
        $is_top = 1;
      }
      else {
        // This sees if $do_table_header had been set during the last loop.  If so,
        // a new table_header is printed.  This keeps a table_header form being the
        // last thing on the page when there is an ad break at the end.
        if ($do_table_header) {
          $TMPL['content'] .= $this->do_skin('table_header');
          $do_table_header = 0;
        }

        $TMPL['content'] .= $this->do_skin('table');
        $top_done = 1;
      }
      if ($page_rank == $CONF['top_skin_num'] && $FORM['start'] <= 1) {
        $TMPL['content'] .= $this->do_skin('table_closer_top');
        $do_table_header = 1;
      }

      if ($CONF['adbreaks'][$page_rank]) {
        if ($is_top) {
          $TMPL['content'] .= $this->do_skin('table_closer_top');
          $TMPL['content'] .= $this->do_skin('ad_break_top');
          $TMPL['content'] .= $this->do_skin('table_header_top');
        }
        else {
          $TMPL['content'] .= $this->do_skin('table_closer');
          $TMPL['content'] .= $this->do_skin('ad_break');
          $do_table_header = 1;
        }
      }

      $is_top = 0;
      $TMPL['rank']++;
      $page_rank++;
    }

    if ($top_done) {
      $TMPL['content'] .= $this->do_skin('table_closer');
    }
    elseif (!$do_table_header) {
      $TMPL['content'] .= $this->do_skin('table_closer_top');
    }
  }
}
?>
