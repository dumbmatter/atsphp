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

class edit extends join_edit {
  function edit() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_edit_header'];

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

    $TMPL['username'] = $DB->escape($FORM['u']);
    list($check) = $DB->fetch("SELECT 1 FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    if ($check) {
      if (!isset($FORM['submit'])) {
        $this->form();
      }
      else {
        $this->process();
      }
    }
    else {
      $this->error($LNG['g_invalid_u'], 'admin');
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
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\" selected=\"selected\">{$cat}</option>\n";
      }
      else {
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\">{$cat}</option>\n";
      }
    }
    $TMPL['categories_menu'] .= '</select>';

    $TMPL['active_menu'] = "<select name=\"active\">\n";
    if ($TMPL['active'] == 1) {
      $TMPL['active_menu'] .= "<option value=\"1\" selected=\"selected\">{$LNG['a_edit_active']}</option>\n<option value=\"0\">{$LNG['a_edit_inactive']}</option>\n";
    }
    else {
      $TMPL['active_menu'] .= "<option value=\"1\">{$LNG['a_edit_active']}</option>\n<option value=\"0\" selected=\"selected\">{$LNG['a_edit_inactive']}</option>\n";
    }
    $TMPL['active_menu'] .= '</select>';

    if ($CONF['max_banner_width'] && $CONF['max_banner_height']) {
      $TMPL['join_banner_size'] = sprintf($LNG['join_banner_size'], $CONF['max_banner_width'], $CONF['max_banner_height']);
    }
    else {
      $TMPL['join_banner_size'] = '';
    }

    $TMPL['url'] = htmlspecialchars($TMPL['url']);
    $TMPL['title'] = htmlspecialchars($TMPL['title']);
    $TMPL['description'] = htmlspecialchars($TMPL['description']);
    $TMPL['banner_url'] = htmlspecialchars($TMPL['banner_url']);
    $TMPL['email'] = htmlspecialchars($TMPL['email']);

    $TMPL['admin_content'] = <<<EndHTML
<form action="{$TMPL['list_url']}/index.php?a=admin&amp;b=edit&amp;u={$TMPL['username']}" method="post">
<fieldset>
<legend>{$LNG['join_website']}</legend>
<div class="{$TMPL['error_style_url']}"><label>{$LNG['g_url']}<br />
<input type="text" name="url" size="50" value="{$TMPL['url']}" />
{$TMPL['error_url']}
</label></div><br />
<div class="{$TMPL['error_style_title']}"><label>{$LNG['g_title']}<br />
<input type="text" name="title" size="50" value="{$TMPL['title']}" />
{$TMPL['error_title']}
</label></div><br />
<label>{$LNG['g_description']}<br />
<textarea cols="40" rows="5" name="description">{$TMPL['description']}</textarea><br /><br />
</label>
<label>{$LNG['g_category']}<br />
{$TMPL['categories_menu']}<br /><br />
</label>
<div class="{$TMPL['error_style_banner_url']}"><label>{$LNG['g_banner_url']} {$TMPL['join_banner_size']}<br />
<input type="text" name="banner_url" size="50" value="{$TMPL['banner_url']}" />
{$TMPL['error_banner_url']}
</label></div><br />
<div class="{$TMPL['error_style_email']}"><label>{$LNG['g_email']}<br />
<input type="text" name="email" size="50" value="{$TMPL['email']}" />
{$TMPL['error_email']}
</label></div>
</fieldset>

<fieldset>
<legend>{$LNG['join_user']}</legend>
<label>{$LNG['g_password']} - {$LNG['edit_password_blank']}<br />
<input type="password" name="password" size="20" /><br /><br />
</label>
<label>{$LNG['a_edit_site_is']}<br />
{$TMPL['active_menu']}<br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['a_edit_header']}" />
</fieldset>
</form>
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['url'] = $DB->escape($FORM['url']);
    $TMPL['title'] = $DB->escape($FORM['title']);
    $TMPL['description'] = $DB->escape($FORM['description']);
    $TMPL['category'] = $DB->escape($FORM['category']);
    $TMPL['banner_url'] = $DB->escape($FORM['banner_url']);
    $TMPL['email'] = $DB->escape($FORM['email']);
    $TMPL['active'] = intval($FORM['active']);

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

      $DB->query("UPDATE {$CONF['sql_prefix']}_sites SET url = '{$TMPL['url']}', short_url = '{$short_url}', title = '{$TMPL['title']}', description = '{$TMPL['description']}', category = '{$TMPL['category']}', banner_url = '{$TMPL['banner_url']}', email = '{$TMPL['email']}', active = {$TMPL['active']}{$password_sql} WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
 
      $TMPL['admin_content'] = $LNG['a_edit_edited'];
    }
    else {
      $this->form();
    }
  }
}
?>
