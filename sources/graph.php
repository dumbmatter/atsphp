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

$TMPL['header'] = $LNG['graph_header'];

if (!is_numeric($FORM['id'])) {
  error($LNG['stats_error_id'], 1, 0);
}
else { $FORM['id'] = intval($FORM['id']); }

$TMPL['graph'] = $LNG['g_'.$FORM['type']];

$result = $db->Execute("SELECT id, url, title, description, urlbanner, ".$FORM['type']."_today, ".$FORM['type']."_1, ".$FORM['type']."_2, ".$FORM['type']."_3, (".$FORM['type']."_today + ".$FORM['type']."_1 + ".$FORM['type']."_2 + ".$FORM['type']."_3) / 4
                       FROM ".$CONFIG['sql_prefix']."_members, ".$CONFIG['sql_prefix']."_stats
                       WHERE id = id2 AND id = ".$FORM['id']);

list($TMPL['id'], $TMPL['real_url'], $TMPL['title'], $TMPL['description'], $TMPL['urlbanner'], $TMPL['tod_graph'], $TMPL['1_graph'], $TMPL['2_graph'], $TMPL['3_graph'], $TMPL['avg_graph']) = $db->FetchArray($result);
$TMPL['url'] = $CONFIG['list_url']."/out.php?id=".$TMPL['id'];

$max = max($TMPL['tod_graph'], $TMPL['1_graph'], $TMPL['2_graph'], $TMPL['3_graph'], $TMPL['avg_graph']);
if ($max) { $number = 275 / $max; }
else { $number = 1 / 1000000; }

$TMPL['tod_num'] = $TMPL['tod_graph'] * $number;
$TMPL['1_num'] = $TMPL['1_graph'] * $number;
$TMPL['2_num'] = $TMPL['2_graph'] * $number;
$TMPL['3_num'] = $TMPL['3_graph'] * $number;
$TMPL['avg_num'] = $TMPL['avg_graph'] * $number;

$TMPL['content'] .= do_template("graph");
?>
