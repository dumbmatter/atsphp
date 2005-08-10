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

class edit extends join_edit {
  function edit() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['edit_header'];

    if (!isset($FORM['submit'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $CONF, $DB, $TMPL;

    $row = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    $TMPL = array_merge($TMPL, $row);

    $TMPL['categories_menu'] = "<select name=\"category\">\n";
    foreach ($CONF['categories'] as $category) {
      if ($TMPL['category'] == $category) {
        $TMPL['categories_menu'] .= "<option value=\"{$category}\" selected=\"selected\">{$category}\n";
      }
      else {
        $TMPL['categories_menu'] .= "<option value=\"{$category}\">{$category}\n";
      }
    }
    $TMPL['categories_menu'] .= "</select>";

    $TMPL['user_cp_content'] = $this->do_skin('edit_form');
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if ($this->check_input('edit')) {
      $TMPL['url'] = $DB->escape($FORM['url']);
      $TMPL['title'] = $DB->escape($FORM['title']);
      $TMPL['description'] = $DB->escape($FORM['description']);
      $TMPL['category'] = $DB->escape($FORM['category']);
      $TMPL['banner_url'] = $DB->escape($FORM['banner_url']);
      $TMPL['email'] = $DB->escape($FORM['email']);
      if ($FORM['password']) {
        $password = md5($FORM['password']);
        $password_sql = ", password = '{$password}'";
      }
      else {
        $password_sql = '';
      }

      require_once("{$CONF['path']}/sources/in.php");
      $short_url = in::short_url($TMPL['url']);

      $DB->query("UPDATE {$CONF['sql_prefix']}_sites SET url = '{$TMPL['url']}', short_url = '{$short_url}', title = '{$TMPL['title']}', description = '{$TMPL['description']}', category = '{$TMPL['category']}', banner_url = '{$TMPL['banner_url']}', email = '{$TMPL['email']}'{$password_sql} WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
 
      $TMPL['user_cp_content'] = $LNG['edit_info_edited'];
    }
  }
}
/*
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
*/
?>
