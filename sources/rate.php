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

class rate extends base {
  function rate() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['rate_header'];

    if (isset($FORM['u']) && $FORM['u']) {
      $TMPL['username'] = $DB->escape($FORM['u']);

      $ip = getenv('REMOTE_ADDR');
      list($ip_sql, $rate) = $DB->fetch("SELECT ip_address, rate FROM {$CONF['sql_prefix']}_ip_log WHERE ip_address = '$ip' AND username = '{$TMPL['username']}'", __FILE__, __LINE__);

      if ($ip == $ip_sql && $rate == 1) {
        $this->error($LNG['rate_error']);
      }

      if (!isset($FORM['rating'])) {
        $this->form();
      }
      else {
        list($username) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
        if ($TMPL['username'] == $username) {
          $this->process($ip, $ip_sql);
        }
        else {
          $this->error($LNG['g_invalid_u']);
        }
      }
    }
  }

  function form() {
    global $CONF, $DB, $FORM, $TMPL;

    $row = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    $TMPL = array_merge($TMPL, $row);

    $TMPL['content'] = $this->do_skin('rate_form');
  }

  function process($ip, $ip_sql) {
    global $CONF, $DB, $FORM, $TMPL;

    // Review
    if (isset($FORM['review']) && $FORM['review']) {
      $date = date("Y-m-d H:i:s", time() + (3600*$CONF['time_offset']));
      list($id) = $DB->fetch("SELECT MAX(id) + 1 FROM {$CONF['sql_prefix']}_reviews", __FILE__, __LINE__);
      if (!$id) {
        $id = 1;
      }

      $review = str_replace('<', '&lt;', $FORM['review']);
      $review = str_replace('>', '&gt;', $review);
      $review = nl2br($review);
      $review = $DB->escape($review);

      $DB->query("INSERT INTO {$CONF['sql_prefix']}_reviews (username, id, date, review, active) VALUES ('{$TMPL['username']}', {$id}, '{$date}', '{$review}', {$CONF['active_default_review']})", __FILE__, __LINE__);
    }

    // Rating
    $rating = intval($FORM['rating']);
    if ($rating > 5) {
      $rating = 5;
    }
    elseif ($rating < 1) {
      $rating = 1;
    }

    $DB->query("UPDATE {$CONF['sql_prefix']}_stats SET total_rating = total_rating + {$rating}, num_ratings = num_ratings + 1 WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);

    // Update the IP log
    if ($ip == $ip_sql) {
      $DB->query("UPDATE {$CONF['sql_prefix']}_ip_log SET rate = 1 WHERE ip_address = '$ip' AND username = '{$TMPL['username']}'", __FILE__, __LINE__);
    }
    else {
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_ip_log (ip_address, username, rate) VALUES ('{$ip}', '{$TMPL['username']}', 1)", __FILE__, __LINE__);
    }

    $TMPL['content'] = $this->do_skin('rate_finish');
  }
}
?>
