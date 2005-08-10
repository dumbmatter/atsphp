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

$TMPL['header'] = $LNG['edit_header'];
if (!$FORM['do']) {
  $TMPL['content'] = do_template("edit_form");
}
elseif ($FORM['do'] == "form" && is_numeric($FORM['id'])) {
  $result = $db->Execute("SELECT id, password, url, title, description, category, urlbanner, email FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']." LIMIT 1");
  list($TMPL['id'], $password, $TMPL['url'], $TMPL['title'], $TMPL['description'], $TMPL['cat'], $TMPL['urlbanner'], $TMPL['email']) = $db->FetchArray($result);

  $TMPL['catselect'] = "<select name=\"cat\">\n";
  foreach ($CONFIG['categories'] as $cat) {
    if ($cat == $TMPL['cat']) { $TMPL['catselect'] .= "<option value=\"$cat\" selected=\"selected\">$cat\n"; }
    else { $TMPL['catselect'] .= "<option value=\"$cat\">$cat\n"; }
  }
  $TMPL['catselect'] .= "</select>";

  $FORM['password'] = md5($FORM['password']);

  if ($FORM['password'] == $password) {
    $TMPL['content'] = do_template("edit_form2");
  }
  else { $TMPL['content'] = $LNG['edit_error']."<br /><br />\n".$LNG['edit_error_id_password']; }
}
elseif ($FORM['do'] == "submit") {
  $result = $db->Execute("SELECT password FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']." LIMIT 1");
  list($password) = $db->FetchArray($result);

  $FORM['password'] = md5($FORM['password']);

  if ($FORM['password'] == $password) {
    if (!preg_match("/http/", $FORM['url'])) { $error_url = 1; }
    if (!preg_match("/.+\@.+\.\w+/", $FORM['email'])) { $error_email = 1; }
    if (!$FORM['title']) { $error_title = 1; }
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

    if ($error_url || $error_email || $error_title || $error_urlbanner) {
      $errormsg .= $LNG['edit_error_forgot']."<br />\n";
      if ($error_url) { $errormsg .= $LNG['edit_error_url']."<br />"; }
      if ($error_email) { $errormsg .= $LNG['edit_error_email']."<br />"; }
      if ($error_title) { $errormsg .= $LNG['edit_error_title']."<br />"; }
      if ($error_password) { $errormsg .= $LNG['edit_error_password']."<br />"; }
      if ($error_urlbanner) { $errormsg .= $LNG['join_error_urlbanner']." ".$CONFIG['max_banner_width']."x".$CONFIG['max_banner_height']."<br />"; }
      $errormsg .= "<br />".$LNG['edit_error_back'];
      error($errormsg, 1);
    }
    else {
      $TMPL['id'] = $FORM['id'];
      $TMPL['url'] = $FORM['url'];
      $TMPL['title'] = $FORM['title'];
      $TMPL['description'] = $FORM['description'];
      $TMPL['cat'] = $FORM['cat'];
      $TMPL['urlbanner'] = $FORM['urlbanner'];
      $TMPL['email'] = $FORM['email'];

      $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_members SET url = '".$TMPL['url']."', title = '".$TMPL['title']."', description = '".$TMPL['description']."', category = '".$TMPL['cat']."', urlbanner = '".$TMPL['urlbanner']."', email = '".$TMPL['email']."' WHERE id = ".$TMPL['id']." AND password = '".$FORM['password']."'");

      $TMPL['content'] = $LNG['edit_success']."<br /><br />\n".$LNG['edit_info_edited'];
    }
  }
  else { error($LNG['edit_error_id_password'], 1); }
}
else { error($LNG['edit_error_id_password'], 1); }
?>
