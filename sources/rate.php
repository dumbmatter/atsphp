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

$TMPL['header'] = $LNG['rate_header'];

// See if it's a valid ID number
if (!is_numeric($FORM['id'])) {
  error($LNG['stats_error_id'], 1, 0);
}
else { $FORM['id'] = intval($FORM['id']); }

// Make sure a user from this IP address hasn't already voted today
$ip = getenv("REMOTE_ADDR");
$result = $db->Execute("SELECT ip_address, rate FROM ".$CONFIG['sql_prefix']."_iplog WHERE ip_address = '$ip' AND id4 = ".$FORM['id']);
list($ip2, $rate) = $db->FetchArray($result);

if ($ip2 == $ip && $rate == 1) {
  error($LNG['rate_error'], 1, 0);
}

if (!$FORM['id']) {
  $TMPL['content'] = do_template("rate_form");
}
elseif ($FORM['do'] == "form") {
  $result = $db->Execute("SELECT id, url, title, description, urlbanner FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']);
  list($TMPL['id'], $TMPL['real_url'], $TMPL['title'], $TMPL['description'], $TMPL['urlbanner']) = $db->FetchArray($result);

  $TMPL['url'] = $CONFIG['list_url']."/out.php?id=".$TMPL['id'];

  $TMPL['content'] = do_template("rate_form2");
}
elseif ($FORM['do'] == "submit") {
  $TMPL['id'] = $FORM['id'];

  if ($FORM['review']) {
    $result = $db->SelectLimit("SELECT review_id FROM ".$CONFIG['sql_prefix']."_reviews ORDER BY review_id desc", 1, 0);
    list($review_id) = $db->FetchArray($result);
    $review_id++;

    $review_date = date("Y-m-d H:i:s", time() + (3600 * $CONFIG['timeoffset']));
    $db->Execute("INSERT INTO ".$CONFIG['sql_prefix']."_reviews (id3, review_id, review_date, review) VALUES (".$FORM['id'].", ".$review_id.", '".$review_date."', '".$FORM['review']."')");
  }

  if ($FORM['rating'] > 5) { $FORM['rating'] = 5; }
  elseif ($FORM['rating'] < 1) { $FORM['rating'] = 1; }

  $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_members SET total_ratings = total_ratings + ".$FORM['rating'].", num_ratings = num_ratings + 1 WHERE id = ".$FORM['id']);

  // Update the IP log
  // $ip2 comes from an earlier part of rate.php
  if ($ip2) {
    $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_iplog SET rate = 1 WHERE ip_address = '$ip' AND id4 = ".$FORM['id']);
  }
  else {
    $db->Execute("INSERT INTO ".$CONFIG['sql_prefix']."_iplog (ip_address, id4, rate) VALUES ('".$ip."', ".$FORM['id'].",1)");
  }

  $TMPL['content'] = do_template("rate_finish");
}
?>
