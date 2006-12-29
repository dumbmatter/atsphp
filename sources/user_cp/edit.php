<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
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

class edit extends join_edit {
  function edit() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['edit_header'];

    $TMPL['error_username'] = '';
    $TMPL['error_style_username'] = '';
    $TMPL['error_password'] = '';
    $TMPL['error_style_password'] = '';
    $TMPL['error_url'] = '';
    $TMPL['error_style_url'] = '';
    $TMPL['error_email'] = '';
    $TMPL['error_style_email'] = '';
    $TMPL['error_title'] = '';
    $TMPL['error_style_title'] = '';
    $TMPL['error_banner_url'] = '';
    $TMPL['error_style_banner_url'] = '';
    $TMPL['error_captcha'] = '';
    $TMPL['error_style_captcha'] = '';

    if (!isset($FORM['submit'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    if (!isset($TMPL['url'])) {
      $row = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
      $TMPL = array_merge($TMPL, $row);
    }
    else {
      if (isset($TMPL['url'])) { $TMPL['url'] = stripslashes($TMPL['url']); }
      if (isset($TMPL['title'])) { $TMPL['title'] = stripslashes($TMPL['title']); }
      if (isset($TMPL['description'])) { $TMPL['description'] = stripslashes($TMPL['description']); }
      if (isset($TMPL['category'])) { $TMPL['category'] = stripslashes($TMPL['category']); }
      if (isset($TMPL['banner_url'])) { $TMPL['banner_url'] = stripslashes($TMPL['banner_url']); }
      if (isset($TMPL['email'])) { $TMPL['email'] = stripslashes($TMPL['email']); }
    }

    $TMPL['categories_menu'] = "<select name=\"category\">\n";
    foreach ($CONF['categories'] as $cat => $skin) {
      if ($TMPL['category'] == $cat) {
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\" selected=\"selected\">{$cat}\n";
      }
      else {
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\">{$cat}\n";
      }
    }
    $TMPL['categories_menu'] .= "</select>";

    if ($CONF['max_banner_width'] && $CONF['max_banner_height']) {
      $TMPL['join_banner_size'] = $LNG['join_banner_size'];
    }
    else {
      $TMPL['join_banner_size'] = '';
    }

    $TMPL['url'] = htmlspecialchars($TMPL['url']);
    $TMPL['title'] = htmlspecialchars($TMPL['title']);
    $TMPL['description'] = htmlspecialchars($TMPL['description']);
    $TMPL['banner_url'] = htmlspecialchars($TMPL['banner_url']);
    $TMPL['email'] = htmlspecialchars($TMPL['email']);

    $TMPL['user_cp_content'] = $this->do_skin('edit_form');
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['url'] = $DB->escape($FORM['url'], 1);
    $TMPL['title'] = $DB->escape($FORM['title'], 1);
    $TMPL['description'] = $DB->escape($FORM['description'], 1);
    $TMPL['category'] = $DB->escape($FORM['category'], 1);
    $TMPL['banner_url'] = $DB->escape($FORM['banner_url'], 1);
    $TMPL['email'] = $DB->escape($FORM['email'], 1);

    $TMPL['title'] = $this->bad_words($TMPL['title']);
    $TMPL['description'] = $this->bad_words($TMPL['description']);

    if ($this->check_input('edit')) {
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
 
      $TMPL['user_cp_content'] = $this->do_skin('edit_finish');
    }
    else {
      $this->form();
    }
  }
}
?>
