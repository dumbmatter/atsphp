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
        unset($translation);

        $file = str_replace('.php', '', $file);
        require "{$CONF['path']}/languages/{$file}.php";

        if (isset($translation)) {
          $languages_menu .= "<option value=\"{$file}\">{$translation}</option>\n";
        }
      }
    }

    $ranking_period_menu = '';
    $ranking_periods = array('daily', 'weekly', 'monthly', 'overall');
    foreach ($ranking_periods as $ranking_period) {
      if ($ranking_period == $CONF['ranking_period']) { $ranking_period_menu .= "<option value=\"$ranking_period\" selected=\"selected\">{$LNG["g_{$ranking_period}"]}\n"; }
      else { $ranking_period_menu .= "<option value=\"$ranking_period\">{$LNG["g_{$ranking_period}"]}\n"; }
    }

    $ranking_method_menu = '';
    $ranking_methods = array('pv', 'in', 'out');
    foreach ($ranking_methods as $ranking_method) {
      if ($ranking_method == $CONF['ranking_method']) { $ranking_method_menu .= "<option value=\"$ranking_method\" selected=\"selected\">{$LNG["g_{$ranking_method}"]}\n"; }
      else { $ranking_method_menu .= "<option value=\"$ranking_method\">{$LNG["g_{$ranking_method}"]}\n"; }
    }

    if ($CONF['ranking_average']) {
      $ranking_average_menu = "<option value=\"1\" selected=\"selected\">{$LNG['g_average']}\n<option value=\"0\">{$LNG['g_this_period']}\n";
    }
    else {
      $ranking_average_menu = "<option value=\"1\">{$LNG['g_average']}\n<option value=\"0\" selected=\"selected\">{$LNG['g_this_period']}\n";
    }
    $LNG['a_s_ranking_average'] = sprintf($LNG['a_s_ranking_average'], strtolower($LNG['g_this_period']));

    if ($CONF['ranks_on_buttons'] == 1) {
      $ranks_on_buttons_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_s_yes']}\n<option value=\"0\">{$LNG['a_s_no']}\n<option value=\"2\">{$LNG['a_s_stat_buttons']}";
    }
    elseif ($CONF['ranks_on_buttons'] == 2) {
      $ranks_on_buttons_menu = "<option value=\"1\">{$LNG['a_s_yes']}\n<option value=\"0\">{$LNG['a_s_no']}\n<option value=\"2\" selected=\"selected\">{$LNG['a_s_stat_buttons']}";
    }
    else {
      $ranks_on_buttons_menu = "<option value=\"1\">{$LNG['a_s_yes']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_no']}\n<option value=\"2\">{$LNG['a_s_stat_buttons']}";
    }

    if ($CONF['search']) {
      $search_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $search_menu = "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }

    if ($CONF['featured_member']) {
      $featured_member_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $featured_member_menu = "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }

    if (!$CONF['active_default']) {
      $active_default_menu = "<option value=\"0\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"1\">{$LNG['a_s_off']}\n";
    }
    else {
      $active_default_menu = "<option value=\"0\">{$LNG['a_s_on']}\n<option value=\"1\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }

    if ($CONF['email_admin_on_join']) {
      $email_admin_on_join_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $email_admin_on_join_menu = "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }

    if ($CONF['gateway']) {
      $gateway_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $gateway_menu = "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }

    if ($CONF['captcha']) {
      $captcha_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_s_on']}\n<option value=\"0\">{$LNG['a_s_off']}\n";
    }
    else {
      $captcha_menu = "<option value=\"1\">{$LNG['a_s_on']}\n<option value=\"0\" selected=\"selected\">{$LNG['a_s_off']}\n";
    }

    $ad_breaks = implode(',', $CONF['ad_breaks']);

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
<select name="default_language">
{$languages_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_your_email']}<br />
<input type="text" name="your_email" size="50" value="{$CONF['your_email']}" />
</label>
</fieldset>

<fieldset>
<legend>{$LNG['a_s_ranking']}</legend>
<label>{$LNG['a_s_num_list']}<br />
<input type="text" name="num_list" size="5" value="{$CONF['num_list']}" /><br /><br />
</label>
<label>{$LNG['a_s_ranking_period']}<br />
<select name="ranking_period">
{$ranking_period_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_ranking_method']}<br />
<select name="ranking_method">
{$ranking_method_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_ranking_average']}<br />
<select name="ranking_average">
{$ranking_average_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_featured_member']}<br />
<select name="featured_member">
{$featured_member_menu}</select><br /><br />
</label>
<label>{$LNG['a_s_top_skin_num']}<br />
<input type="text" name="top_skin_num" size="5" value="{$CONF['top_skin_num']}" /><br /><br />
</label>
<label>{$LNG['a_s_ad_breaks']}<br />
<input type="text" name="ad_breaks" size="20" value="{$ad_breaks}" />
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

    $list_name = $DB->escape($FORM['list_name']);
    $list_url = $DB->escape($FORM['list_url']);
    $default_language = $DB->escape($FORM['default_language']);
    $your_email = $DB->escape($FORM['your_email']);

    $num_list = intval($FORM['num_list']);
    $ranking_period = $DB->escape($FORM['ranking_period']);
    $ranking_method = $DB->escape($FORM['ranking_method']);
    $ranking_average = intval($FORM['ranking_average']);
    $featured_member = intval($FORM['featured_member']);
    $top_skin_num = intval($FORM['top_skin_num']);
    $ad_breaks = $DB->escape($FORM['ad_breaks']);
    $ad_breaks = preg_replace('/[^0-9,]/m', '', $ad_breaks);

    $active_default = intval($FORM['active_default']);
    $delete_after = intval($FORM['delete_after']);
    $email_admin_on_join = intval($FORM['email_admin_on_join']);
    $max_banner_width = intval($FORM['max_banner_width']);
    $max_banner_height = intval($FORM['max_banner_height']);
    $default_banner = $DB->escape($FORM['default_banner']);

    $ranks_on_buttons = intval($FORM['ranks_on_buttons']);
    $button_url = $DB->escape($FORM['button_url']);
    $button_dir = $DB->escape($FORM['button_dir']);
    $button_ext = $DB->escape($FORM['button_ext']);
    $button_num = intval($FORM['button_num']);

    $search = intval($FORM['search']);
    $time_offset = intval($FORM['time_offset']);
    $gateway = intval($FORM['gateway']);
    $captcha = intval($FORM['captcha']);
    $DB->query("UPDATE {$CONF['sql_prefix']}_settings SET list_name = '{$list_name}', list_url = '{$list_url}', default_language = '{$default_language}', your_email = '{$your_email}',
                num_list = {$num_list}, ranking_period = '{$ranking_period}', ranking_method = '{$ranking_method}', ranking_average = {$ranking_average}, featured_member = {$featured_member}, top_skin_num = {$top_skin_num}, ad_breaks = '{$ad_breaks}',
                active_default = {$active_default}, delete_after = {$delete_after}, email_admin_on_join = {$email_admin_on_join}, max_banner_width = {$max_banner_width}, max_banner_height = {$max_banner_height}, default_banner = '{$default_banner}',
                ranks_on_buttons = {$ranks_on_buttons}, button_url = '{$button_url}', button_dir = '{$button_dir}', button_ext = '{$button_ext}', button_num = {$button_num},
                search = {$search}, time_offset = {$time_offset}, gateway = {$gateway}, captcha = {$captcha}
               ", __FILE__, __LINE__);
 
    $TMPL['admin_content'] = $LNG['a_s_updated'];
  }
}
?>
