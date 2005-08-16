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
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_edit_header'];

    $TMPL['username'] = $DB->escape($FORM['u']);
    list($TMPL['title']) = $DB->fetch("SELECT title FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    if ($TMPL['title']) {
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
    $TMPL['categories_menu'] .= '</select>';

    $TMPL['active_menu'] = "<select name=\"active\">\n";
    if ($TMPL['active'] == 1) {
      $TMPL['active_menu'] .= "<option value=\"1\" selected=\"selected\">{$LNG['a_edit_active']}\n<option value=\"0\">{$LNG['a_edit_inactive']}\n";
    }
    else {
      $TMPL['active_menu'] .= "<option value=\"1\">{$LNG['a_edit_active']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_edit_inactive']}\n";
    }
    $TMPL['active_menu'] .= '</select>';

    $TMPL['admin_content'] = <<<EndHTML
<form action="index.php?a=admin&amp;b=edit&amp;u={$TMPL['username']}" method="post">
<fieldset>
<legend>{$LNG['join_website']}</legend>
<label>{$LNG['g_url']}<br />
<input type="text" name="url" size="50" value="{$TMPL['url']}" /><br /><br />
</label>
<label>{$LNG['g_title']}<br />
<input type="text" name="title" size="50" value="{$TMPL['title']}" /><br /><br />
</label>
<label>{$LNG['g_description']}<br />
<textarea cols="40" rows="5" name="description">{$TMPL['description']}</textarea><br /><br />
</label>
<label>{$LNG['g_category']}<br />
{$TMPL['categories_menu']}<br /><br />
</label>
<label>{$LNG['g_banner_url']}<br />
<input type="text" name="banner_url" size="50" value="{$TMPL['banner_url']}" /><br /><br />
</label>
<label>{$LNG['g_email']}<br />
<input type="text" name="email" size="50" value="{$TMPL['email']}" />
</label>
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

    if ($this->check_input('edit')) {
      $TMPL['url'] = $DB->escape($FORM['url']);
      $TMPL['title'] = $DB->escape($FORM['title']);
      $TMPL['description'] = $DB->escape($FORM['description']);
      $TMPL['category'] = $DB->escape($FORM['category']);
      $TMPL['banner_url'] = $DB->escape($FORM['banner_url']);
      $TMPL['email'] = $DB->escape($FORM['email']);
      $TMPL['active'] = intval($FORM['active']);
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
 
      $TMPL['admin_content'] = $LNG['a_edit_info_edited'];
    }
  }
}
?>
