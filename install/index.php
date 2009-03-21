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

// Help prevent register_globals injection
define('ATSPHP', 1);
$CONF = array();
$FORM = array();
$TMPL = array();

// Change the path to your full path if necessary
$CONF['path'] = '..';

// Combine the GET and POST input
$FORM = array_merge($_GET, $_POST);

if (!isset($FORM['l'])) {
  $TMPL['content'] = <<<EndHTML
Please select your language.<br /><br />
<form action="index.php" method="get">
<select name="l">
EndHTML;
  $languages = array();
  $dir = opendir("{$CONF['path']}/languages/");
  while (false !== ($file = readdir($dir))) {
    $file = str_replace('.php', '', $file);
    if (is_file("{$CONF['path']}/languages/{$file}.php")) {
      require "{$CONF['path']}/languages/{$file}.php";
      $languages[$file] = $translation;
    }
  }
  natcasesort($languages);
  foreach ($languages as $file => $translation) {
    if ($file == 'english') {
      $TMPL['content'] .= "<option value=\"{$file}\" selected=\"selected\">{$translation}</option>\n";
    }
    else {
      $TMPL['content'] .= "<option value=\"{$file}\">{$translation}</option>\n";
    }
  }
  require "{$CONF['path']}/languages/english.php";
  $TMPL['content'] .= <<<EndHTML
</select>
<input type="submit" value="Go" />
</form>
EndHTML;
}
elseif (!isset($FORM['submit'])) {
  require_once("{$CONF['path']}/languages/{$FORM['l']}.php");

  $path = str_replace('/install/index.php', '', $_SERVER['PHP_SELF']);
  $list_url = "http://{$_SERVER['HTTP_HOST']}{$path}";

  $sql_menu = '';
  $dir = opendir("{$CONF['path']}/sources/sql/");
  while (false !== ($file = readdir($dir))) {
    if ($file != '.' && $file != '..' && !is_dir("{$CONF['path']}/sources/sql/{$file}")) {
      $file = str_replace('.php', '', $file);
      require "{$CONF['path']}/sources/sql/{$file}.php";
      $sql_menu .= "<option value=\"{$file}\">{$database}</option>\n";
    }
  }

  $TMPL['content'] = <<<EndHTML
{$LNG['install_welcome']}<br /><br />
<form action="index.php" method="post">
<input name="l" type="hidden" value="{$FORM['l']}" />
<fieldset>
<legend>{$LNG['a_s_general']}</legend>
<label>{$LNG['a_s_admin_password']}<br />
<input name="admin_password" type="password" size="20" /><br /><br />
</label>
<label>{$LNG['a_s_list_url']}<br />
<input name="list_url" type="text" size="50" value="{$list_url}" /><br /><br />
</label>
<label>{$LNG['a_s_your_email']}<br />
<input name="your_email" type="text" size="50" />
</label>
</fieldset>
<fieldset>
<legend>{$LNG['a_s_sql']}</legend>
<label>{$LNG['a_s_sql_type']}<br />
<select name="sql">
$sql_menu</select><br /><br />
</label>
<label>{$LNG['a_s_sql_host']}<br />
<input name="sql_host" type="text" size="20" value="localhost" /><br /><br />
</label>
<label>{$LNG['a_s_sql_database']}<br />
<input name="sql_database" type="text" size="20" /><br /><br />
</label>
<label>{$LNG['a_s_sql_username']}<br />
<input name="sql_username" type="text" size="20" /><br /><br />
</label>
<label>{$LNG['a_s_sql_password']}<br />
<input name="sql_password" type="password" size="20" /><br /><br />
</label>
<label>{$LNG['install_sql_prefix']}<br />
<input name="sql_prefix" type="text" size="20" value="ats" /><br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['install_header']}" />
</fieldset>
</form>
EndHTML;
}
else {
  require_once("{$CONF['path']}/languages/{$FORM['l']}.php");

  require_once("{$CONF['path']}/sources/sql/{$FORM['sql']}.php");
  $DB = "sql_{$FORM['sql']}";
  $DB = new $DB;

  if ($DB->connect($FORM['sql_host'], $FORM['sql_username'], $FORM['sql_password'], $FORM['sql_database'])) {
    $default_language = $DB->escape($FORM['l']);
    $admin_password = md5($FORM['admin_password']);
    $list_url = $DB->escape($FORM['list_url']);
    $your_email = $DB->escape($FORM['your_email']);

    $file = "{$CONF['path']}/settings_sql.php";
    if ($fh = @fopen($file, 'w')) {
      $settings_sql = <<<EndHTML
<?php
\$CONF['sql'] = '{$FORM['sql']}';
\$CONF['sql_host'] = '{$FORM['sql_host']}';
\$CONF['sql_database'] = '{$FORM['sql_database']}';
\$CONF['sql_username'] = '{$FORM['sql_username']}';
\$CONF['sql_password'] = '{$FORM['sql_password']}';
\$CONF['sql_prefix'] = '{$FORM['sql_prefix']}';
?>
EndHTML;
      fwrite($fh, $settings_sql);
      fclose($fh);
      require_once("{$CONF['path']}/settings_sql.php");

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_settings` (
                    `list_name` varchar(255) default 'My Topsites List',
                    `list_url` varchar(255) default '',
                    `default_language` varchar(255) default '',
                    `default_skin` varchar(255) default 'fusion',
                    `your_email` varchar(255) default '',
                    `num_list` int(5) default 10,
                    `ranking_period` varchar(7) default 'daily',
                    `ranking_method` varchar(255) default 'pv',
                    `ranking_average` tinyint(1) default 1,
                    `featured_member` tinyint(1) default 0,
                    `top_skin_num` int(5) default 2,
                    `ad_breaks` varchar(255) default '',
                    `fill_blank_rows` tinyint(1) default 1,
                    `active_default` tinyint(1) default 0,
                    `active_default_review` tinyint(1) default 1,
                    `delete_after` int(5) default 14,
                    `email_admin_on_join` tinyint(1) default 0,
                    `email_admin_on_review` tinyint(1) default 0,
                    `max_banner_width` int(4) default 0,
                    `max_banner_height` int(4) default 0,
                    `default_banner` varchar(255) default '',
                    `ranks_on_buttons` tinyint(1) default 1,
                    `button_url` varchar(255) default '',
                    `button_dir` varchar(255) default '',
                    `button_ext` varchar(255) default 'png',
                    `button_num` int(3) default 5,
                    `google_friendly_links` tinyint(1) default '1',
                    `search` tinyint(1) default 1,
                    `time_offset` int(2) default 0,
                    `gateway` tinyint(1) default 1,
                    `captcha` tinyint(1) default 1,
                    `security_question` text,
                    `security_answer` varchar(255)
                  )", __FILE__, __LINE__);
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_settings (list_url, default_language, your_email, default_banner, button_url, button_dir)
                  VALUES ('{$list_url}', '{$default_language}', '{$your_email}', '{$list_url}/images/button.png', '{$list_url}/images/button.png', '{$list_url}/images')", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_bad_words` (
                    `id` int(10) unsigned NOT NULL,
                    `word` varchar(255),
                    `replacement` varchar(255),
                    `matching` tinyint(1),
                    PRIMARY KEY  (`id`)
                  )", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_ban` (
                    `id` int(10) unsigned NOT NULL,
                    `string` varchar(255) NOT NULL,
                    `field` varchar(255) NOT NULL,
                    `matching` tinyint(1) NOT NULL,
                    PRIMARY KEY  (`id`)
                  )", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_custom_pages` (
                    `id` varchar(255) default '' NOT NULL,
                    `title` varchar(255) default '',
                    `content` text,
                    PRIMARY KEY  (`id`)
                  )", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_etc` (
                    `admin_password` varchar(32) default '',
                    `last_new_day` tinyint(4) default 0,
                    `last_new_week` tinyint(4) default 0,
                    `last_new_month` tinyint(4) default 0,
                    `version` varchar(255) default 0,
                    `original_version` varchar(255) default 0
                  )", __FILE__, __LINE__);
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_etc (admin_password, version, original_version) VALUES ('{$admin_password}', '5.2.0', '5.2.0')", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_categories` (
                    `category` varchar(255) default '' NOT NULL,
                    `skin` varchar(255) default '',
                    PRIMARY KEY  (`category`)
                  )", __FILE__, __LINE__);
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_categories (category) VALUES ('Category')", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_ip_log` (
                    `ip_address` varchar(78) default '' NOT NULL,
                    `username` varchar(255) default '' NOT NULL,
                    `unq_pv` tinyint(1) default 0,
                    `unq_in` tinyint(1) default 0,
                    `unq_out` tinyint(1) default 0,
                    `rate` tinyint(1) default 0,
                    PRIMARY KEY  (`ip_address`,`username`)
                  )", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_reviews` (
                    `username` varchar(255) default '',
                    `id` bigint(20) unsigned default 0 NOT NULL,
                    `date` datetime default '0000-00-00 00:00:00',
                    `review` text,
                    `active` tinyint(1) default 1,
                    PRIMARY KEY  (`id`)
                  )", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_sessions` (
                    `type` varchar(7) default '',
                    `sid` varchar(32) default '' NOT NULL,
                    `time` int(10) unsigned default 0,
                    `data` varchar(255) default '',
                    PRIMARY KEY  (`sid`)
                  )", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_sites` (
                    `username` varchar(255) default '' NOT NULL,
                    `password` varchar(32) default '',
                    `url` varchar(255) default '',
                    `short_url` varchar(255) default '',
                    `title` varchar(255) default '',
                    `description` varchar(255) default '',
                    `category` varchar(255) default '',
                    `banner_url` varchar(255) default '',
                    `email` varchar(255) default '',
                    `join_date` date default '0000-00-00',
                    `active` tinyint(1) default 1,
                    `openid` tinyint(1) default 0,
                    `user_ip` varchar(255) default '',
                    PRIMARY KEY  (`username`)
                  )", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_sites_edited` (
                    `username` varchar(255) default '' NOT NULL,
                    `url` varchar(255) default '',
                    `title` varchar(255) default '',
                    PRIMARY KEY  (`username`)
                  );", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_stats` (
                    `username` varchar(255) default '' NOT NULL,
                    `rank_cache` bigint(20) unsigned default 0,
                    `rank_cache_time` int(10) unsigned default 0,
                    `old_rank` bigint(20) unsigned default 0,
                    `days_inactive` int(10) unsigned default 0,
                    `total_rating` bigint(20) unsigned default 0,
                    `num_ratings` bigint(20) unsigned default 0,
                    `unq_pv_overall` bigint(20) unsigned default 0,
                    `tot_pv_overall` bigint(20) unsigned default 0,
                    `unq_in_overall` bigint(20) unsigned default 0,
                    `tot_in_overall` bigint(20) unsigned default 0,
                    `unq_out_overall` bigint(20) unsigned default 0,
                    `tot_out_overall` bigint(20) unsigned default 0,
                    `unq_pv_0_daily` bigint(20) unsigned default 0,
                    `unq_pv_1_daily` bigint(20) unsigned default 0,
                    `unq_pv_2_daily` bigint(20) unsigned default 0,
                    `unq_pv_3_daily` bigint(20) unsigned default 0,
                    `unq_pv_4_daily` bigint(20) unsigned default 0,
                    `unq_pv_5_daily` bigint(20) unsigned default 0,
                    `unq_pv_6_daily` bigint(20) unsigned default 0,
                    `unq_pv_7_daily` bigint(20) unsigned default 0,
                    `unq_pv_8_daily` bigint(20) unsigned default 0,
                    `unq_pv_9_daily` bigint(20) unsigned default 0,
                    `unq_pv_max_daily` bigint(20) unsigned default 0,
                    `tot_pv_0_daily` bigint(20) unsigned default 0,
                    `tot_pv_1_daily` bigint(20) unsigned default 0,
                    `tot_pv_2_daily` bigint(20) unsigned default 0,
                    `tot_pv_3_daily` bigint(20) unsigned default 0,
                    `tot_pv_4_daily` bigint(20) unsigned default 0,
                    `tot_pv_5_daily` bigint(20) unsigned default 0,
                    `tot_pv_6_daily` bigint(20) unsigned default 0,
                    `tot_pv_7_daily` bigint(20) unsigned default 0,
                    `tot_pv_8_daily` bigint(20) unsigned default 0,
                    `tot_pv_9_daily` bigint(20) unsigned default 0,
                    `tot_pv_max_daily` bigint(20) unsigned default 0,
                    `unq_in_0_daily` bigint(20) unsigned default 0,
                    `unq_in_1_daily` bigint(20) unsigned default 0,
                    `unq_in_2_daily` bigint(20) unsigned default 0,
                    `unq_in_3_daily` bigint(20) unsigned default 0,
                    `unq_in_4_daily` bigint(20) unsigned default 0,
                    `unq_in_5_daily` bigint(20) unsigned default 0,
                    `unq_in_6_daily` bigint(20) unsigned default 0,
                    `unq_in_7_daily` bigint(20) unsigned default 0,
                    `unq_in_8_daily` bigint(20) unsigned default 0,
                    `unq_in_9_daily` bigint(20) unsigned default 0,
                    `unq_in_max_daily` bigint(20) unsigned default 0,
                    `tot_in_0_daily` bigint(20) unsigned default 0,
                    `tot_in_1_daily` bigint(20) unsigned default 0,
                    `tot_in_2_daily` bigint(20) unsigned default 0,
                    `tot_in_3_daily` bigint(20) unsigned default 0,
                    `tot_in_4_daily` bigint(20) unsigned default 0,
                    `tot_in_5_daily` bigint(20) unsigned default 0,
                    `tot_in_6_daily` bigint(20) unsigned default 0,
                    `tot_in_7_daily` bigint(20) unsigned default 0,
                    `tot_in_8_daily` bigint(20) unsigned default 0,
                    `tot_in_9_daily` bigint(20) unsigned default 0,
                    `tot_in_max_daily` bigint(20) unsigned default 0,
                    `unq_out_0_daily` bigint(20) unsigned default 0,
                    `unq_out_1_daily` bigint(20) unsigned default 0,
                    `unq_out_2_daily` bigint(20) unsigned default 0,
                    `unq_out_3_daily` bigint(20) unsigned default 0,
                    `unq_out_4_daily` bigint(20) unsigned default 0,
                    `unq_out_5_daily` bigint(20) unsigned default 0,
                    `unq_out_6_daily` bigint(20) unsigned default 0,
                    `unq_out_7_daily` bigint(20) unsigned default 0,
                    `unq_out_8_daily` bigint(20) unsigned default 0,
                    `unq_out_9_daily` bigint(20) unsigned default 0,
                    `unq_out_max_daily` bigint(20) unsigned default 0,
                    `tot_out_0_daily` bigint(20) unsigned default 0,
                    `tot_out_1_daily` bigint(20) unsigned default 0,
                    `tot_out_2_daily` bigint(20) unsigned default 0,
                    `tot_out_3_daily` bigint(20) unsigned default 0,
                    `tot_out_4_daily` bigint(20) unsigned default 0,
                    `tot_out_5_daily` bigint(20) unsigned default 0,
                    `tot_out_6_daily` bigint(20) unsigned default 0,
                    `tot_out_7_daily` bigint(20) unsigned default 0,
                    `tot_out_8_daily` bigint(20) unsigned default 0,
                    `tot_out_9_daily` bigint(20) unsigned default 0,
                    `tot_out_max_daily` bigint(20) unsigned default 0,
                    `unq_pv_0_weekly` bigint(20) unsigned default 0,
                    `unq_pv_1_weekly` bigint(20) unsigned default 0,
                    `unq_pv_2_weekly` bigint(20) unsigned default 0,
                    `unq_pv_3_weekly` bigint(20) unsigned default 0,
                    `unq_pv_4_weekly` bigint(20) unsigned default 0,
                    `unq_pv_5_weekly` bigint(20) unsigned default 0,
                    `unq_pv_6_weekly` bigint(20) unsigned default 0,
                    `unq_pv_7_weekly` bigint(20) unsigned default 0,
                    `unq_pv_8_weekly` bigint(20) unsigned default 0,
                    `unq_pv_9_weekly` bigint(20) unsigned default 0,
                    `unq_pv_max_weekly` bigint(20) unsigned default 0,
                    `tot_pv_0_weekly` bigint(20) unsigned default 0,
                    `tot_pv_1_weekly` bigint(20) unsigned default 0,
                    `tot_pv_2_weekly` bigint(20) unsigned default 0,
                    `tot_pv_3_weekly` bigint(20) unsigned default 0,
                    `tot_pv_4_weekly` bigint(20) unsigned default 0,
                    `tot_pv_5_weekly` bigint(20) unsigned default 0,
                    `tot_pv_6_weekly` bigint(20) unsigned default 0,
                    `tot_pv_7_weekly` bigint(20) unsigned default 0,
                    `tot_pv_8_weekly` bigint(20) unsigned default 0,
                    `tot_pv_9_weekly` bigint(20) unsigned default 0,
                    `tot_pv_max_weekly` bigint(20) unsigned default 0,
                    `unq_in_0_weekly` bigint(20) unsigned default 0,
                    `unq_in_1_weekly` bigint(20) unsigned default 0,
                    `unq_in_2_weekly` bigint(20) unsigned default 0,
                    `unq_in_3_weekly` bigint(20) unsigned default 0,
                    `unq_in_4_weekly` bigint(20) unsigned default 0,
                    `unq_in_5_weekly` bigint(20) unsigned default 0,
                    `unq_in_6_weekly` bigint(20) unsigned default 0,
                    `unq_in_7_weekly` bigint(20) unsigned default 0,
                    `unq_in_8_weekly` bigint(20) unsigned default 0,
                    `unq_in_9_weekly` bigint(20) unsigned default 0,
                    `unq_in_max_weekly` bigint(20) unsigned default 0,
                    `tot_in_0_weekly` bigint(20) unsigned default 0,
                    `tot_in_1_weekly` bigint(20) unsigned default 0,
                    `tot_in_2_weekly` bigint(20) unsigned default 0,
                    `tot_in_3_weekly` bigint(20) unsigned default 0,
                    `tot_in_4_weekly` bigint(20) unsigned default 0,
                    `tot_in_5_weekly` bigint(20) unsigned default 0,
                    `tot_in_6_weekly` bigint(20) unsigned default 0,
                    `tot_in_7_weekly` bigint(20) unsigned default 0,
                    `tot_in_8_weekly` bigint(20) unsigned default 0,
                    `tot_in_9_weekly` bigint(20) unsigned default 0,
                    `tot_in_max_weekly` bigint(20) unsigned default 0,
                    `unq_out_0_weekly` bigint(20) unsigned default 0,
                    `unq_out_1_weekly` bigint(20) unsigned default 0,
                    `unq_out_2_weekly` bigint(20) unsigned default 0,
                    `unq_out_3_weekly` bigint(20) unsigned default 0,
                    `unq_out_4_weekly` bigint(20) unsigned default 0,
                    `unq_out_5_weekly` bigint(20) unsigned default 0,
                    `unq_out_6_weekly` bigint(20) unsigned default 0,
                    `unq_out_7_weekly` bigint(20) unsigned default 0,
                    `unq_out_8_weekly` bigint(20) unsigned default 0,
                    `unq_out_9_weekly` bigint(20) unsigned default 0,
                    `unq_out_max_weekly` bigint(20) unsigned default 0,
                    `tot_out_0_weekly` bigint(20) unsigned default 0,
                    `tot_out_1_weekly` bigint(20) unsigned default 0,
                    `tot_out_2_weekly` bigint(20) unsigned default 0,
                    `tot_out_3_weekly` bigint(20) unsigned default 0,
                    `tot_out_4_weekly` bigint(20) unsigned default 0,
                    `tot_out_5_weekly` bigint(20) unsigned default 0,
                    `tot_out_6_weekly` bigint(20) unsigned default 0,
                    `tot_out_7_weekly` bigint(20) unsigned default 0,
                    `tot_out_8_weekly` bigint(20) unsigned default 0,
                    `tot_out_9_weekly` bigint(20) unsigned default 0,
                    `tot_out_max_weekly` bigint(20) unsigned default 0,
                    `unq_pv_0_monthly` bigint(20) unsigned default 0,
                    `unq_pv_1_monthly` bigint(20) unsigned default 0,
                    `unq_pv_2_monthly` bigint(20) unsigned default 0,
                    `unq_pv_3_monthly` bigint(20) unsigned default 0,
                    `unq_pv_4_monthly` bigint(20) unsigned default 0,
                    `unq_pv_5_monthly` bigint(20) unsigned default 0,
                    `unq_pv_6_monthly` bigint(20) unsigned default 0,
                    `unq_pv_7_monthly` bigint(20) unsigned default 0,
                    `unq_pv_8_monthly` bigint(20) unsigned default 0,
                    `unq_pv_9_monthly` bigint(20) unsigned default 0,
                    `unq_pv_max_monthly` bigint(20) unsigned default 0,
                    `tot_pv_0_monthly` bigint(20) unsigned default 0,
                    `tot_pv_1_monthly` bigint(20) unsigned default 0,
                    `tot_pv_2_monthly` bigint(20) unsigned default 0,
                    `tot_pv_3_monthly` bigint(20) unsigned default 0,
                    `tot_pv_4_monthly` bigint(20) unsigned default 0,
                    `tot_pv_5_monthly` bigint(20) unsigned default 0,
                    `tot_pv_6_monthly` bigint(20) unsigned default 0,
                    `tot_pv_7_monthly` bigint(20) unsigned default 0,
                    `tot_pv_8_monthly` bigint(20) unsigned default 0,
                    `tot_pv_9_monthly` bigint(20) unsigned default 0,
                    `tot_pv_max_monthly` bigint(20) unsigned default 0,
                    `unq_in_0_monthly` bigint(20) unsigned default 0,
                    `unq_in_1_monthly` bigint(20) unsigned default 0,
                    `unq_in_2_monthly` bigint(20) unsigned default 0,
                    `unq_in_3_monthly` bigint(20) unsigned default 0,
                    `unq_in_4_monthly` bigint(20) unsigned default 0,
                    `unq_in_5_monthly` bigint(20) unsigned default 0,
                    `unq_in_6_monthly` bigint(20) unsigned default 0,
                    `unq_in_7_monthly` bigint(20) unsigned default 0,
                    `unq_in_8_monthly` bigint(20) unsigned default 0,
                    `unq_in_9_monthly` bigint(20) unsigned default 0,
                    `unq_in_max_monthly` bigint(20) unsigned default 0,
                    `tot_in_0_monthly` bigint(20) unsigned default 0,
                    `tot_in_1_monthly` bigint(20) unsigned default 0,
                    `tot_in_2_monthly` bigint(20) unsigned default 0,
                    `tot_in_3_monthly` bigint(20) unsigned default 0,
                    `tot_in_4_monthly` bigint(20) unsigned default 0,
                    `tot_in_5_monthly` bigint(20) unsigned default 0,
                    `tot_in_6_monthly` bigint(20) unsigned default 0,
                    `tot_in_7_monthly` bigint(20) unsigned default 0,
                    `tot_in_8_monthly` bigint(20) unsigned default 0,
                    `tot_in_9_monthly` bigint(20) unsigned default 0,
                    `tot_in_max_monthly` bigint(20) unsigned default 0,
                    `unq_out_0_monthly` bigint(20) unsigned default 0,
                    `unq_out_1_monthly` bigint(20) unsigned default 0,
                    `unq_out_2_monthly` bigint(20) unsigned default 0,
                    `unq_out_3_monthly` bigint(20) unsigned default 0,
                    `unq_out_4_monthly` bigint(20) unsigned default 0,
                    `unq_out_5_monthly` bigint(20) unsigned default 0,
                    `unq_out_6_monthly` bigint(20) unsigned default 0,
                    `unq_out_7_monthly` bigint(20) unsigned default 0,
                    `unq_out_8_monthly` bigint(20) unsigned default 0,
                    `unq_out_9_monthly` bigint(20) unsigned default 0,
                    `unq_out_max_monthly` bigint(20) unsigned default 0,
                    `tot_out_0_monthly` bigint(20) unsigned default 0,
                    `tot_out_1_monthly` bigint(20) unsigned default 0,
                    `tot_out_2_monthly` bigint(20) unsigned default 0,
                    `tot_out_3_monthly` bigint(20) unsigned default 0,
                    `tot_out_4_monthly` bigint(20) unsigned default 0,
                    `tot_out_5_monthly` bigint(20) unsigned default 0,
                    `tot_out_6_monthly` bigint(20) unsigned default 0,
                    `tot_out_7_monthly` bigint(20) unsigned default 0,
                    `tot_out_8_monthly` bigint(20) unsigned default 0,
                    `tot_out_9_monthly` bigint(20) unsigned default 0,
                    `tot_out_max_monthly` bigint(20) unsigned default 0,
                    PRIMARY KEY  (`username`)
                  )", __FILE__, __LINE__);

      $TMPL['content'] = <<<EndHTML
{$LNG['install_done']}<br /><br />
<a href="{$list_url}/">{$LNG['install_your']}</a><br />
<a href="{$list_url}/index.php?a=admin">{$LNG['install_admin']}</a><br />
<a href="http://www.aardvarktopsitesphp.com/manual/">{$LNG['install_manual']}</a><br /><br />
{$LNG['install_mailing_list']}<br /><br />
<form action="http://www.aardvarktopsitesphp.com/mailing_list.php?a=add" method="post">
<input type="hidden" name="i" value="0" />
<input type="text" name="email" size="50" value="{$your_email}" />
<input type="submit" value="{$LNG['join_header']}" />
</form>
EndHTML;
    }
    else {
      $TMPL['content'] = "<h3>{$LNG['g_error']}</h3><br />{$LNG['install_error_chmod']}<br />";
    }
  }
  else {
    $TMPL['content'] = "<h3>{$LNG['g_error']}</h3><br />{$LNG['install_error_sql']}<br />";
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Aardvark Topsites PHP 5.2 - <?php echo $LNG['install_header']; ?></title>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo $LNG['charset']; ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="../skins/fusion/screen.css" />
</head>
<body>

<div id="wrapper">
	<div id="header"><img src="../skins/fusion/header.jpg" width="700" height="65" /></div><br />
	<div id="content"><?php echo $TMPL['content']; ?><br /></div>
</div>
</body>
</html>
