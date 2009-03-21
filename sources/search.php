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

class search extends base {
  function search() {
    global $CONF, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['search_header'];

    if (!$CONF['search']) {
      $this->error($LNG['search_off']);
    }
    elseif (!isset($FORM['q']) || !$FORM['q']) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $TMPL;

    $TMPL['content'] = $this->do_skin('search_form');
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['query'] = strip_tags($FORM['q']);
    $words = explode(' ', $DB->escape($FORM['q']));

    // Filter out words that are only 1 or 2 characters
    $filtered_words = array_filter($words, create_function('$word', 'return strlen($word) > 2;'));

    if (count($filtered_words) > 0) {
      $words = $filtered_words;
    }

    if (isset($FORM['start'])) {
      $start = intval($FORM['start']);
      if ($start > 0) {
        $start--;
      }
    }
    else {
      $start = 0;
    }

    $query = "SELECT sites.username, url, title, description, banner_url FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats WHERE active = 1 AND sites.username = stats.username AND (";
    $i = 0;
    foreach ($words as $word) {
      if ($i > 0) {
        $query .= " OR ";
      }
      $query .= "description LIKE '%{$word}%' OR title LIKE '%{$word}%'";

      $i++;
    }
    $query .= ")";

    $result = $DB->query($query, __FILE__, __LINE__);
    $TMPL['num_results'] = $DB->num_rows($result);

    $order_by = $this->rank_by()." DESC";
    $query .= " ORDER BY {$order_by}";

    $result = $DB->select_limit($query, 10, $start, __FILE__, __LINE__);

    $TMPL['results'] = '';
    $TMPL['rank'] = $start + 1;
    while (list($TMPL['username'], $TMPL['url'], $TMPL['title'], $TMPL['description'], $TMPL['banner_url']) = $DB->fetch_array($result)) {
      foreach ($words as $word) {
        $word = preg_quote($word);
        $TMPL['description'] = preg_replace_callback("/({$word})/i", create_function('$matches', 'return "<b>{$matches[1]}</b>";'), $TMPL['description']);
        $TMPL['title'] = preg_replace_callback("/({$word})/i", create_function('$matches', 'return "<b>{$matches[1]}</b>";'), $TMPL['title']);
      }

      $TMPL['results'] .= $this->do_skin('search_result');

      $TMPL['rank']++;
    }

    if (!$TMPL['results']) {
      $this->error($LNG['search_no_sites']);
    }

    $prev_num = $start - 9;
    if ($prev_num < 1) {
      $prev_num = 1;
    }
    $next_num = $start + 11;

    if ($start >= 1) {
      $TMPL['previous'] = "<a href=\"{$TMPL['list_url']}/index.php?a=search&amp;q={$TMPL['query']}&amp;start={$prev_num}\">{$LNG['search_prev']}</a>";
    }
    else {
      $TMPL['previous'] = $LNG['search_prev'];
    }

    if ($next_num <= $TMPL['num_results']) {
      $TMPL['next'] = "<a href=\"{$TMPL['list_url']}/index.php?a=search&amp;q={$TMPL['query']}&amp;start={$next_num}\">{$LNG['search_next']}</a>";
    }
    else {
      $TMPL['next'] = $LNG['search_next'];
    }

    $TMPL['displaying_results'] = sprintf($LNG['search_displaying_results'], ++$start, --$TMPL['rank'], $TMPL['num_results'], $TMPL['query']);

    $TMPL['content'] = $this->do_skin('search_results');
  }
}
?>
