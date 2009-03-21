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
<form action="upgrade-4.x.php" method="get">
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

  require_once("{$CONF['path']}/config.php");

  $upgrade_version = sprintf($LNG['upgrade_version'], '4.x');

  if (strpos($TMPL['version'], '4.2.') !== false || strpos($TMPL['version'], '4.1.') !== false) {
    $TMPL['content'] = <<<EndHTML
{$LNG['upgrade_welcome']}<br /><br />
{$upgrade_version}<br /><br />
<form action="upgrade-4.x.php" method="post">
<input name="l" type="hidden" value="{$FORM['l']}" />
<input name="submit" type="submit" value="{$LNG['upgrade_header']}" />
</form>
EndHTML;
  }
  else {
    $TMPL['content'] = "<h3>{$LNG['g_error']}</h3><br />{$LNG['upgrade_error_version']}";
  }
}
else {
  require_once("{$CONF['path']}/languages/{$FORM['l']}.php");

  require_once("{$CONF['path']}/config.php");

  require_once("{$CONF['path']}/sources/sql/{$CONFIG['sql']}.php");
  $DB = "sql_{$CONFIG['sql']}";
  $DB = new $DB;

  if ($DB->connect($CONFIG['sql_host'], $CONFIG['sql_user'], $CONFIG['sql_pass'], $CONFIG['sql_database'])) {
    $default_language = $DB->escape($FORM['l']);

    $file = "{$CONF['path']}/settings_sql.php";
    if ($fh = @fopen($file, 'w')) {
      $settings_sql = <<<EndHTML
<?php
\$CONF['sql'] = '{$CONFIG['sql']}';
\$CONF['sql_host'] = '{$CONFIG['sql_host']}';
\$CONF['sql_database'] = '{$CONFIG['sql_database']}';
\$CONF['sql_username'] = '{$CONFIG['sql_user']}';
\$CONF['sql_password'] = '{$CONFIG['sql_pass']}';
\$CONF['sql_prefix'] = '{$CONFIG['sql_prefix']}';
?>
EndHTML;
      fwrite($fh, $settings_sql);
      fclose($fh);
      require_once("{$CONF['path']}/settings_sql.php");

      if ($CONFIG['daymonth'] == 1) {
        $ranking_period = 'monthly';
      }
      elseif ($CONFIG['daymonth'] == 2) {
        $ranking_period = 'weekly';
      }
      else {
        $ranking_period = 'daily';
      }

      $ranking_method = substr($CONFIG['rankingmethod'], 4);
      if ($ranking_method != 'pv' && $ranking_method != 'in' && $ranking_method != 'out') {
        $ranking_method = 'pv';
      }

      if (!isset($CONFIG['captcha'])) {
        $CONFIG['captcha'] = 1;
      }

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
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_settings (list_name, list_url, default_language, your_email, num_list, ranking_period, ranking_method, featured_member, top_skin_num, active_default, delete_after, email_admin_on_join, max_banner_width, max_banner_height, default_banner, ranks_on_buttons, button_url, button_dir, button_ext, button_num, search, time_offset, gateway, captcha)
                  VALUES ('{$TMPL['list_name']}', '{$TMPL['list_url']}', '{$default_language}', '{$CONFIG['youremail']}', '{$CONFIG['numlist']}', '{$ranking_period}', '{$ranking_method}', '{$CONFIG['featured']}', '{$CONFIG['top']}', '{$CONFIG['active_default']}', '{$CONFIG['delete_after']}', '{$CONFIG['email_admin_on_join']}', '{$CONFIG['max_banner_width']}', '{$CONFIG['max_banner_height']}', '{$CONFIG['defbanner']}', '{$CONFIG['ranks_on_buttons']}', '{$CONFIG['button_url']}', '{$CONFIG['button_dir']}', '{$CONFIG['button_ext']}', '{$CONFIG['button_num']}', '{$CONFIG['search']}', '{$CONFIG['timeoffset']}', '{$CONFIG['gateway']}', '{$CONFIG['captcha']}')", __FILE__, __LINE__);

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

      list($admin_password) = $DB->fetch("SELECT admin_password FROM {$CONF['sql_prefix']}_etc", __FILE__, __LINE__);
      $DB->query("DROP TABLE {$CONF['sql_prefix']}_etc", __FILE__, __LINE__);
      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_etc` (
                    `admin_password` varchar(32) default '',
                    `last_new_day` tinyint(4) default 0,
                    `last_new_week` tinyint(4) default 0,
                    `last_new_month` tinyint(4) default 0,
                    `version` varchar(255) default 0,
                    `original_version` varchar(255) default 0
                  )", __FILE__, __LINE__);
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_etc (admin_password, version, original_version) VALUES ('{$admin_password}', '5.2.0', '4')", __FILE__, __LINE__);

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_categories` (
                    `category` varchar(255) default '' NOT NULL,
                    `skin` varchar(255) default '',
                    PRIMARY KEY  (`category`)
                  )", __FILE__, __LINE__);
      foreach ($CONFIG['categories'] as $category) {
        $DB->query("INSERT INTO {$CONF['sql_prefix']}_categories (category) VALUES ('{$category}')", __FILE__, __LINE__);
      }

      $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_ip_log` (
                    `ip_address` varchar(78) default '' NOT NULL,
                    `username` varchar(255) default '' NOT NULL,
                    `unq_pv` tinyint(1) default 0,
                    `unq_in` tinyint(1) default 0,
                    `unq_out` tinyint(1) default 0,
                    `rate` tinyint(1) default 0,
                    PRIMARY KEY  (`ip_address`,`username`)
                  )", __FILE__, __LINE__);

      $DB->query("ALTER TABLE `{$CONF['sql_prefix']}_reviews`
                  CHANGE `id3` `username` varchar(255),
                  CHANGE `review_id` `id` bigint NOT NULL,
                  CHANGE `review_date` `date` datetime,
                  ADD `active` tinyint(1) default 1", __FILE__, __LINE__);

      $DB->query("DROP TABLE {$CONF['sql_prefix']}_sessions", __FILE__, __LINE__);
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

      $DB->query("DROP TABLE {$CONF['sql_prefix']}_stats", __FILE__, __LINE__);
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

      require_once("{$CONF['path']}/sources/misc/classes.php");
      require_once("{$CONF['path']}/sources/in.php");
      $result = $DB->query("SELECT id, password, url, title, description, category, urlbanner, email, total_ratings, num_ratings, jointime, active FROM {$CONF['sql_prefix']}_members", __FILE__, __LINE__);
      while (list($username, $password, $url, $title, $description, $category, $banner_url, $email, $total_rating, $num_ratings, $jointime, $active) = $DB->fetch_array($result)) {
        $join_date = date('Y-m-d', $jointime);
        $short_url = in::short_url($url);

        $url = $DB->escape($url);
        $title = $DB->escape($title);
        $description = $DB->escape($description);
        $category = $DB->escape($category);
        $banner_url = $DB->escape($banner_url);
        $email = $DB->escape($email);

        $DB->query("INSERT INTO {$CONF['sql_prefix']}_sites (username, password, url, short_url, title, description, category, banner_url, email, join_date, active)
                    VALUES ('{$username}', '{$password}', '{$url}', '{$short_url}', '{$title}', '{$description}', '{$category}', '{$banner_url}', '{$email}', '{$join_date}', {$active})", __FILE__, __LINE__);

        $DB->query("INSERT INTO {$CONF['sql_prefix']}_stats (username, total_rating, num_ratings)
                    VALUES ('{$username}', {$total_rating}, {$num_ratings})", __FILE__, __LINE__);
      }

      $DB->query("DROP TABLE {$CONF['sql_prefix']}_iplog", __FILE__, __LINE__);

      $TMPL['content'] = <<<EndHTML
{$LNG['upgrade_done']}<br /><br />
<a href="{$TMPL['list_url']}/">{$LNG['install_your']}</a><br />
<a href="{$TMPL['list_url']}/index.php?a=admin">{$LNG['install_admin']}</a><br />
<a href="http://www.aardvarktopsitesphp.com/manual/">{$LNG['install_manual']}</a><br /><br />
{$LNG['install_mailing_list']}<br /><br />
<form action="http://www.aardvarktopsitesphp.com/mailing_list.php?a=add" method="post">
<input type="hidden" name="i" value="0" />
<input type="text" name="email" size="50" />
<input type="submit" value="{$LNG['join_header']}" />
</form>
EndHTML;
    }
    else {
      $TMPL['content'] = "<h3>{$LNG['g_error']}</h3><br />{$LNG['install_error_chmod']}";
    }
  }
  else {
    $TMPL['content'] = "<h3>{$LNG['g_error']}</h3><br />{$LNG['install_error_sql']}";
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Aardvark Topsites PHP 5.2 - <?php echo $LNG['upgrade_header']; ?></title>
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
