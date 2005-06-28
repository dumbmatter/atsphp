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

$TMPL['header'] = $LNG['search_header'];

if (!$CONFIG['search']) {
  error($LNG['search_off'], 1, 0);
}

if ($FORM['web'] && $FORM['kw']) {
  $kw = urlencode($FORM['kw']);
  header("Location: http://www.google.com/search?q=".$kw);
}
elseif ($FORM['kw']) {
  $start = $FORM['start'] ? $FORM['start'] : 0;
  $TMPL['kw'] = $FORM['kw'];

  $keywords = explode(" ", $FORM['kw']);
  $first_kw = array_shift($keywords);
  while (!$first_kw) { $first_kw = array_shift($keywords); }
  $query = "SELECT id, url, title, description, urlbanner FROM ".$CONFIG['sql_prefix']."_members WHERE active = 1 AND (description LIKE '%".$first_kw."%' OR title LIKE '%".$first_kw."%'";
  foreach ($keywords as $value) {
    $query .= " OR description LIKE '%".$value."%' OR title LIKE '%".$value."%'";
  }
  $query .= ")";

  $result = $db->SelectLimit($query, $CONFIG['searchresults'], $start);

  $TMPL['result'] = $start + 1;
  while (list($TMPL['id'], $TMPL['real_url'], $TMPL['title'], $TMPL['description'], $TMPL['urlbanner']) = $db->FetchArray($result)) {
    $TMPL['url'] = $CONFIG['list_url']."/out.php?id=".$TMPL['id'];
    $TMPL['description'] = str_replace($FORM['kw'], "<b>".$FORM['kw']."</b>", $TMPL['description']);
    $TMPL['results'] .= $TMPL['result'].". <a href=\"".$TMPL['url']."\" target=\"_blank\"><b>".$TMPL['title']."</b></a><br />".$TMPL['description']."</a><br /><font color=\"#737373\">".$LNG['g_id'].": ".$TMPL['id']." | ".$TMPL['real_url']."</font><br /><br />\n";

    $TMPL['result']++;
    $results = 1;
  }

  if (!$results) {
    error($LNG['search_nosites'], 1, 0);
    $nextisprev = 1;
  }

  if ($start >= $CONFIG['searchresults']) {
    $TMPL['prev'] = $start - $CONFIG['searchresults'];
  }
  else {
    $TMPL['prev'] = 0;
  }

  if ($nextisprev) {
    $TMPL['next'] = $TMPL['prev'];
  }
  else {
    $TMPL['next'] = $start + $CONFIG['searchresults'];
  }

  $TMPL['content'] .= do_template("search_results");
}
else {
  $TMPL['content'] .= do_template("search_form");
}
?>
