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

class search extends base {
  function search() {
    global $CONF, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['search_header'];

    if (!$CONF['search']) {
      $this->error($LNG['search_off']);
    }
    elseif (!isset($FORM['q'])) {
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

    $TMPL['query'] = $DB->escape($FORM['q']);
    $words = explode(' ', $FORM['q']);

    if (isset($FORM['start'])) {
      $start = intval($FORM['start']);
      if ($start > 0) {
        $start--;
      }
    }
    else {
      $start = 0;
    }

    $query = "SELECT username, url, title, description, banner_url FROM {$CONF['sql_prefix']}_sites WHERE active = 1 AND (";
    for ($i = 0; $i < count($words); $i++) {
      if ($i > 0) {
        $query .= " OR ";
      }
      $query .= "description LIKE '%{$words[$i]}%' OR title LIKE '%{$words[$i]}%'";
    }
    $query .= ")";

    $result = $DB->select_limit($query, 10, $start, __FILE__, __LINE__);

    $TMPL['results'] = '';
    $TMPL['rank'] = $start + 1;
    while (list($TMPL['username'], $TMPL['url'], $TMPL['title'], $TMPL['description'], $TMPL['banner_url']) = $DB->fetch_array($result)) {
      foreach ($words as $word) {
        $TMPL['description'] = str_replace($word, "<b>{$word}</b>", $TMPL['description']);
        $TMPL['title'] = str_replace($word, "<b>{$word}</b>", $TMPL['title']);
      }

      $TMPL['results'] .= $this->do_skin('search_result');

      $TMPL['rank']++;
    }

    if (!$TMPL['results']) {
      $this->error($LNG['search_no_sites']);
    }

    $TMPL['prev'] = $start - 10;
    if ($TMPL['prev'] < 0) {
      $TMPL['prev'] = 0;
    }
    $TMPL['next'] = $start + 10;

    $TMPL['content'] = $this->do_skin('search_results');
  }
}
?>
