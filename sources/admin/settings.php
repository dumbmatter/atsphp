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

class settings extends base {
  function settings() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_s_header'];

    if (!isset($FORM['submit'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    $languages_menu = '';
    $dir = opendir("{$CONF['path']}/languages/");
    while (false !== ($file = readdir($dir))) {
      if ($file != '.' && $file != '..') {
        $file = str_replace('.php', '', $file);
        require "{$CONF['path']}/languages/{$file}.php";
        $languages_menu .= "<option value=\"{$file}\">{$translation}</option>\n";
      }
    }

    $search_menu = '';
    if ($CONF['search']) {
      $search_menu .= "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $search_menu .= "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }
    $featured_member_menu = '';
    if ($CONF['featured_member']) {
      $featured_member_menu .= "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $featured_member_menu .= "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }
    $active_default_menu = '';
    if (!$CONF['active_default']) {
      $active_default_menu .= "<option value=\"0\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"1\">{$LNG['a_s_off']}\n";
    }
    else {
      $active_default_menu .= "<option value=\"0\">{$LNG['a_s_on']}\n<option value=\"1\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }
    $email_admin_on_join_menu = '';
    if ($CONF['email_admin_on_join']) {
      $email_admin_on_join_menu .= "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $email_admin_on_join_menu .= "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }
    $gateway_menu = '';
    if ($CONF['gateway']) {
      $gateway_menu .= "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $gateway_menu .= "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }
    $captcha_menu = '';
    if ($CONF['captcha']) {
      $captcha_menu .= "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $captcha_menu .= "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }

    $TMPL['admin_content'] = <<<EndHTML
<form action="index.php?a=admin&amp;b=settings" method="post">
<fieldset>
<legend>{$LNG['a_s_general']}</legend>
<label>{$LNG['a_s_list_name']}<br />
<input type="text" name="list_name" size="50" value="{$CONF['list_name']}" /><br /><br />
</label>
<label>{$LNG['a_s_list_url']}<br />
<input type="text" name="list_url" size="50" value="{$CONF['list_url']}" /><br /><br />
</label>
<label>{$LNG['a_s_default_language']}<br />
<select name="language">
{$languages_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_your_email']}<br />
<input type="text" name="your_email" size="50" value="{$CONF['your_email']}" />
</label>
</fieldset>

<fieldset>
<legend>{$LNG['a_s_ranking']}</legend>
<label>{$LNG['a_s_categories']}<br />
{$categories_menu}<br /><br />
</label>
<label>{$LNG['a_s_num_list']}<br />
<input type="text" name="num_list" size="5" value="{$CONF['num_list']}" /><br /><br />
</label>
<label>{$LNG['a_s_ranking_period']}overall<br />
<select name="ranking_period">
{$ranking_period_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_ranking_method']}<br />
<select name="ranking_method">
{$ranking_method_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_featured_member']}<br />
<select name="featured_member">
{$featured_member_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_top_skin_num']}<br />
<input type="text" name="top_skin_num" size="5" value="{$CONF['top_skin_num']}" /><br /><br />
</label>
<label>{$LNG['a_s_ad_breaks']}<br />
{$ad_breaks_menu}
</label>
</fieldset>

<fieldset>
<legend>{$LNG['a_s_member']}</legend>
<label>{$LNG['a_s_active_default']}<br />
<select name="active_default">
{$active_default_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_delete_after']}<br />
<input type="text" name="delete_after" size="5" value="{$CONF['delete_after']}" /><br /><br />
</label>
<label>{$LNG['a_s_email_admin_on_join']}<br />
<select name="email_admin_on_join">
{$email_admin_on_join_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_max_banner_width']}<br />
<input type="text" name="max_banner_width" size="5" value="{$CONF['max_banner_width']}" /><br /><br />
</label>
<label>{$LNG['a_s_max_banner_height']}<br />
<input type="text" name="max_banner_height" size="5" value="{$CONF['max_banner_height']}" /><br /><br />
</label>
<label>{$LNG['a_s_default_banner']}<br />
<input type="text" name="default_banner" size="50" value="{$CONF['default_banner']}" />
</label>
</fieldset>

<fieldset>
<legend>{$LNG['a_s_button']}</legend>
<label>{$LNG['a_s_ranks_on_buttons']}<br />
<select name="ranks_on_buttons">
{$ranks_on_buttons_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_button_url']}<br />
<input type="text" name="button_url" size="50" value="{$CONF['button_url']}" /><br /><br />
</label>
<label>{$LNG['a_s_button_dir']}<br />
<input type="text" name="button_dir" size="50" value="{$CONF['button_dir']}" /><br /><br />
</label>
<label>{$LNG['a_s_button_ext']}<br />
<input type="text" name="button_ext" size="5" value="{$CONF['button_ext']}" /><br /><br />
</label>
<label>{$LNG['a_s_button_num']}<br />
<input type="text" name="button_num" size="5" value="{$CONF['button_num']}" />
</label>
</fieldset>

<fieldset>
<legend>{$LNG['a_s_other']}</legend>
<label>{$LNG['a_s_search']}<br />
<select name="search">
{$search_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_time_offset']}<br />
<input type="text" name="time_offset" size="5" value="{$CONF['time_offset']}" /><br /><br />
</label>
<label>{$LNG['a_s_gateway']}<br />
<select name="gateway">
{$gateway_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_captcha']}<br />
<select name="captcha">
{$captcha_menu}</select><br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['a_s_header']}" />
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
