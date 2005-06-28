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

$TMPL['header'] = $LNG['join_header'];
if (!$FORM['url']) {
  $TMPL['catselect'] = "<select name=\"cat\">\n";
  foreach ($CONFIG['categories'] as $cat) {
    $TMPL['catselect'] .= "<option value=\"$cat\">$cat\n";
  }
  $TMPL['catselect'] .= "</select>";

  $TMPL['content'] = do_template("join_form");
}
else {
  if (!preg_match("/http/", $FORM['url'])) { $error_url = 1; }
  if (!preg_match("/.+\@.+\.\w+/", $FORM['email'])) { $error_email = 1; }
  if (!$FORM['title']) { $error_title = 1; }
  if (!$FORM['password']) { $error_password = 1; }
  if ($FORM['urlbanner'] == '' || $FORM['urlbanner'] == "http://") {
    $FORM['urlbanner'] = $CONFIG['defbanner'];
  }
  elseif ($CONFIG['max_banner_width'] && $CONFIG['max_banner_height']) {
    $size = @getimagesize($FORM['urlbanner']);
    if ($size[0] > $CONFIG['max_banner_width'] || $size[1] > $CONFIG['max_banner_height']) {
      $error_urlbanner = 1;
    }
    if (!$size[0] && !$size[1]) { $error_urlbanner = 1; }
  }

  if ($error_url || $error_email || $error_title || $error_password || $error_urlbanner) {
    $errormsg .= $LNG['join_error_forgot']."<br />\n";
    if ($error_url) { $errormsg .= $LNG['join_error_url']."<br />"; }
    if ($error_email) { $errormsg .= $LNG['join_error_email']."<br />"; }
    if ($error_title) { $errormsg .= $LNG['join_error_title']."<br />"; }
    if ($error_password) { $errormsg .= $LNG['join_error_password']."<br />"; }
    if ($error_urlbanner) { $errormsg .= $LNG['join_error_urlbanner']." ".$CONFIG['max_banner_width']."x".$CONFIG['max_banner_height'].".<br />"; }
    $errormsg .= "<br />".$LNG['join_error_back'];
    error($errormsg, 1);
  }
  else {
    $test = time() - 1800;
    $result = $db->Execute("SELECT jointime FROM ".$CONFIG['sql_prefix']."_members WHERE title = '".$FORM['title']."' AND jointime > ".$test);
    list($jointime) = $db->FetchArray($result);
    if ($jointime) {
      error($LNG['join_error_time'], 1, 0);
    }

    $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_etc SET num_members = num_members + 1, highest_id = highest_id + 1");

    $result = $db->Execute("SELECT num_members, highest_id FROM ".$CONFIG['sql_prefix']."_etc");
    list($num_members, $TMPL['id']) = $db->FetchArray($result);

    $TMPL['url'] = $FORM['url'];
    $TMPL['title'] = $FORM['title'];
    $TMPL['description'] = $FORM['description'];
    $TMPL['cat'] = $FORM['cat'];
    $TMPL['urlbanner'] = $FORM['urlbanner'];
    $TMPL['email'] = $FORM['email'];

    $FORM['password'] = md5($FORM['password']);

    $time = time();
    $db->Execute("INSERT INTO ".$CONFIG['sql_prefix']."_members (id, password, url, title, description, category, urlbanner, email, jointime, active)
                  VALUES (".$TMPL['id'].", '".$FORM['password']."', '".$TMPL['url']."', '".$TMPL['title']."', '".$TMPL['description']."', '".$TMPL['cat']."', '".$TMPL['urlbanner']."', '".$TMPL['email']."', ".$time.", ".$CONFIG['active_default'].")");
    $db->Execute("INSERT INTO ".$CONFIG['sql_prefix']."_stats (id2, old_rank, days_inactive, unq_pv_today, unq_pv_1, unq_pv_2, unq_pv_3, tot_pv_today, tot_pv_1, tot_pv_2, tot_pv_3, unq_in_today, unq_in_1, unq_in_2, unq_in_3, tot_in_today, tot_in_1, tot_in_2, tot_in_3, unq_out_today, unq_out_1, unq_out_2, unq_out_3, tot_out_today, tot_out_1, tot_out_2, tot_out_3) 
                  VALUES (".$TMPL['id'].", $num_members, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)");

    $file = $CONFIG['skins_path']."/".$TMPL['skin_name']."/welcome.html";
    $fh_welcome = fopen($file, "r");
    $welcome = fread($fh_welcome, filesize($file)); 
    fclose($fh_welcome);

    $welcome_array = explode("\n", $welcome);

    $subject = array_shift($welcome_array);
    $subject = preg_replace("/Subject\: /", "", $subject );
    $welcome = implode("\n", $welcome_array);
    $subject = template_regex($subject);
    $welcome = template_regex($welcome);
    mail($TMPL['email'], $subject, $welcome, "From: ".$CONFIG['youremail']."\r\n");

    if ($CONFIG['email_admin_on_join']) {
      $file = $CONFIG['skins_path']."/".$TMPL['skin_name']."/welcome_admin.html";
      $fh_welcome_admin = fopen($file, "r");
      $welcome_admin = fread($fh_welcome_admin, filesize($file));
      fclose($fh_welcome_admin);

      $welcome_admin_array = explode("\n", $welcome_admin);

      $subject = array_shift($welcome_admin_array);
      $subject = preg_replace("/Subject\: /", "", $subject );
      $welcome_admin = implode("\n", $welcome_admin_array);
      $subject = template_regex($subject);
      $welcome_admin = template_regex($welcome_admin);
      mail($CONFIG['youremail'], $subject, $welcome_admin, "From: ".$CONFIG['youremail']."\r\n");
    }

    $TMPL['content'] = do_template("join_finish");
  }
}
?>
