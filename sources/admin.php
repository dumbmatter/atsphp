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

class admin extends base {
  function admin() {
    global $CONF, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_header'];

    if (!isset($_COOKIE['atsphp_sid_admin'])) {
      $this->login();
    }
    else {
      require_once("{$CONF['path']}/sources/misc/session.php");
      $session = new session;
      list($type, $data) = $session->get($_COOKIE['atsphp_sid_admin']);
      if ($type == 'admin') {
        $session->update($_COOKIE['atsphp_sid_admin']);

        // Array containing the valid .php files from the sources/admin directory
        $action = array(
                    'approve' => 1,
                    'approve_reviews' => 1,
                    'create_page' => 1,
                    'delete' => 1,
                    'delete_bad_word' => 1,
                    'delete_page' => 1,
                    'delete_review' => 1,
                    'edit' => 1,
                    'edit_page' => 1,
                    'edit_bad_word' => 1,
                    'edit_review' => 1,
                    'email' => 1,
                    'manage' => 1,
                    'manage_bad_words' => 1,
                    'manage_pages' => 1,
                    'manage_reviews' => 1,
                    'settings' => 1,
                    'skins' => 1
                  );

        if (isset($FORM['b']) && isset($action[$FORM['b']])) {
          $page_name = $FORM['b'];
          require_once("{$CONF['path']}/sources/admin/{$page_name}.php");
          $page = new $page_name;

          $TMPL['content'] = $this->do_skin('admin');
        }
        elseif (isset($FORM['b']) && $FORM['b'] == 'logout') {
          $this->logout();
        }
        else {
          $this->main();
        }
      }
      else {
        $session->delete($_COOKIE['atsphp_sid_admin'], 'atsphp_sid_admin');
        $TMPL['content'] = $LNG['g_session_expired'];
      }
    }
  }

  function login() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (!isset($FORM['password']) || !$FORM['password']) {
      $TMPL['content'] = $this->do_skin('admin_login');
    }
    else {
      list($admin_password) = $DB->fetch("SELECT admin_password FROM {$CONF['sql_prefix']}_etc", __FILE__, __LINE__);
      if ($admin_password == md5($FORM['password'])) {
        require_once("{$CONF['path']}/sources/misc/session.php");
        $session = new session;
        $session->create('admin', 1);

        $this->main();
      }
      else {
        $this->error($LNG['g_invalid_p']);
      }
    }
  }

  function logout() {
    global $CONF, $LNG, $TMPL;

    require_once("{$CONF['path']}/sources/misc/session.php");
    $session = new session;
    $session->delete($_COOKIE['atsphp_sid_admin']);

    $TMPL['content'] = $LNG['a_logout_message'];
  }

  function main() {
    global $DB, $CONF, $LNG, $TMPL;

    $TMPL['admin_content'] = "{$LNG['a_main']}<br /><br />";

    $phpversion = phpversion();
    if (version_compare($phpversion, '4.3.0', '>=')) {
      $latest_version = @file_get_contents('http://www.aardvarktopsitesphp.com/topsitesphp/version.txt');
    }
    if (!$latest_version) {
      $latest_version = '?';
    }
    $TMPL['admin_content'] .= "{$LNG['a_main_your']}: {$TMPL['version']}<br />{$LNG['a_main_latest']}: {$latest_version}<br />\n{$LNG['a_main_new']}<br /><br />";

    list($num_waiting) = $DB->fetch("SELECT COUNT(*) FROM {$CONF['sql_prefix']}_sites WHERE active = 0", __FILE__, __LINE__);
    if ($num_waiting == 1) {
      $TMPL['admin_content'] .= "<b><a href=\"{$TMPL['list_url']}/index.php?a=admin&amp;b=approve\">{$LNG['a_main_approve']}</a></b><br /><br />";
    }
    elseif ($num_waiting > 1) {
      $TMPL['admin_content'] .= "<b><a href=\"{$TMPL['list_url']}/index.php?a=admin&amp;b=approve\">".sprintf($LNG['a_main_approves'], $num_waiting)."</a></b><br /><br />";
    }

    list($num_waiting_rev) = $DB->fetch("SELECT COUNT(*) FROM {$CONF['sql_prefix']}_reviews WHERE active = 0", __FILE__, __LINE__);
    if ($num_waiting_rev == 1) {
      $TMPL['admin_content'] .= "<b><a href=\"{$TMPL['list_url']}/index.php?a=admin&amp;b=approve_reviews\">{$LNG['a_main_approve_rev']}</a></b><br /><br />";
    }
    elseif ($num_waiting_rev > 1) {
      $TMPL['admin_content'] .= "<b><a href=\"{$TMPL['list_url']}/index.php?a=admin&amp;b=approve_reviews\">".sprintf($LNG['a_main_approve_revs'], $num_waiting_rev)."</a></b><br /><br />";
    }

    list($TMPL["unq_pv_avg_daily"], $TMPL["tot_pv_avg_daily"], $TMPL["unq_in_avg_daily"], $TMPL["tot_in_avg_daily"], $TMPL["unq_out_avg_daily"], $TMPL["tot_out_avg_daily"],
         $TMPL["unq_pv_0_daily"], $TMPL["unq_pv_1_daily"], $TMPL["tot_pv_0_daily"], $TMPL["tot_pv_1_daily"],
         $TMPL["unq_in_0_daily"], $TMPL["unq_in_1_daily"], $TMPL["tot_in_0_daily"], $TMPL["tot_in_1_daily"],
         $TMPL["unq_out_0_daily"], $TMPL["unq_out_1_daily"], $TMPL["tot_out_0_daily"], $TMPL["tot_out_1_daily"],
         $TMPL['unq_pv_overall'], $TMPL['tot_pv_overall'], $TMPL['unq_in_overall'], $TMPL['tot_in_overall'], $TMPL['unq_out_overall'], $TMPL['tot_out_overall']
         ) = $DB->fetch("SELECT
                         ROUND(SUM(unq_pv_0_{$CONF['ranking_period']} + unq_pv_1_{$CONF['ranking_period']} + unq_pv_2_{$CONF['ranking_period']} + unq_pv_3_{$CONF['ranking_period']} + unq_pv_4_{$CONF['ranking_period']} + unq_pv_5_{$CONF['ranking_period']} + unq_pv_6_{$CONF['ranking_period']} + unq_pv_7_{$CONF['ranking_period']} + unq_pv_8_{$CONF['ranking_period']} + unq_pv_9_{$CONF['ranking_period']}) / 10, 0),
                         ROUND(SUM(tot_pv_0_{$CONF['ranking_period']} + tot_pv_1_{$CONF['ranking_period']} + tot_pv_2_{$CONF['ranking_period']} + tot_pv_3_{$CONF['ranking_period']} + tot_pv_4_{$CONF['ranking_period']} + tot_pv_5_{$CONF['ranking_period']} + tot_pv_6_{$CONF['ranking_period']} + tot_pv_7_{$CONF['ranking_period']} + tot_pv_8_{$CONF['ranking_period']} + tot_pv_9_{$CONF['ranking_period']}) / 10, 0),
                         ROUND(SUM(unq_in_0_{$CONF['ranking_period']} + unq_in_1_{$CONF['ranking_period']} + unq_in_2_{$CONF['ranking_period']} + unq_in_3_{$CONF['ranking_period']} + unq_in_4_{$CONF['ranking_period']} + unq_in_5_{$CONF['ranking_period']} + unq_in_6_{$CONF['ranking_period']} + unq_in_7_{$CONF['ranking_period']} + unq_in_8_{$CONF['ranking_period']} + unq_in_9_{$CONF['ranking_period']}) / 10, 0),
                         ROUND(SUM(tot_in_0_{$CONF['ranking_period']} + tot_in_1_{$CONF['ranking_period']} + tot_in_2_{$CONF['ranking_period']} + tot_in_3_{$CONF['ranking_period']} + tot_in_4_{$CONF['ranking_period']} + tot_in_5_{$CONF['ranking_period']} + tot_in_6_{$CONF['ranking_period']} + tot_in_7_{$CONF['ranking_period']} + tot_in_8_{$CONF['ranking_period']} + tot_in_9_{$CONF['ranking_period']}) / 10, 0),
                         ROUND(SUM(unq_out_0_{$CONF['ranking_period']} + unq_out_1_{$CONF['ranking_period']} + unq_out_2_{$CONF['ranking_period']} + unq_out_3_{$CONF['ranking_period']} + unq_out_4_{$CONF['ranking_period']} + unq_out_5_{$CONF['ranking_period']} + unq_out_6_{$CONF['ranking_period']} + unq_out_7_{$CONF['ranking_period']} + unq_out_8_{$CONF['ranking_period']} + unq_out_9_{$CONF['ranking_period']}) / 10, 0),
                         ROUND(SUM(tot_out_0_{$CONF['ranking_period']} + tot_out_1_{$CONF['ranking_period']} + tot_out_2_{$CONF['ranking_period']} + tot_out_3_{$CONF['ranking_period']} + tot_out_4_{$CONF['ranking_period']} + tot_out_5_{$CONF['ranking_period']} + tot_out_6_{$CONF['ranking_period']} + tot_out_7_{$CONF['ranking_period']} + tot_out_8_{$CONF['ranking_period']} + tot_out_9_{$CONF['ranking_period']}) / 10, 0),
                         SUM(unq_pv_0_{$CONF['ranking_period']}), SUM(unq_pv_1_{$CONF['ranking_period']}), SUM(tot_pv_0_{$CONF['ranking_period']}), SUM(tot_pv_1_{$CONF['ranking_period']}),
                         SUM(unq_in_0_{$CONF['ranking_period']}), SUM(unq_in_1_{$CONF['ranking_period']}), SUM(tot_in_0_{$CONF['ranking_period']}), SUM(tot_in_1_{$CONF['ranking_period']}),
                         SUM(unq_out_0_{$CONF['ranking_period']}), SUM(unq_out_1_{$CONF['ranking_period']}), SUM(tot_out_0_{$CONF['ranking_period']}), SUM(tot_out_1_{$CONF['ranking_period']}),
                         SUM(unq_pv_overall), SUM(tot_pv_overall), SUM(unq_in_overall), SUM(tot_in_overall), SUM(unq_out_overall), SUM(tot_out_overall)
                         FROM {$CONF['sql_prefix']}_stats", __FILE__, __LINE__);

    if ($CONF['ranking_period'] == 'daily') {
      $today = $LNG['g_today'];
      $yesterday = $LNG['g_yesterday'];
    }
    elseif ($CONF['ranking_period'] == 'weekly') {
      $today = $LNG['g_this_week'];
      $yesterday = $LNG['g_last_week'];
    }
    elseif ($CONF['ranking_period'] == 'monthly') {
      $today = $LNG['g_this_month'];
      $yesterday = $LNG['g_last_month'];
    }

    $TMPL['admin_content'] .= <<<EndHTML
<div class="table_border">
<table cellspacing="1" cellpadding="1">
	<tr>
		<th class="stats_top">{$LNG["g_{$CONF['ranking_period']}"]}</th>
		<th class="stats_top">{$LNG['g_average']}</td>
		<th class="stats_top">{$today}</td>
		<th class="stats_top">{$yesterday}</td>
		<th class="stats_top">{$LNG['g_overall']}</td>
	</tr>
	<tr>
		<td class="stats2" style="text-align: left;">{$LNG['g_unq_pv']}</th>
		<td class="stats2">{$TMPL['unq_pv_avg_daily']}</td>
		<td class="stats2">{$TMPL['unq_pv_0_daily']}</td>
		<td class="stats2">{$TMPL['unq_pv_1_daily']}</td>
		<td class="stats2">{$TMPL['unq_pv_overall']}</td>
	</tr>
	<tr>
		<td class="stats1" style="text-align: left;">{$LNG['g_tot_pv']}</th>
		<td class="stats1">{$TMPL['tot_pv_avg_daily']}</td>
		<td class="stats1">{$TMPL['tot_pv_0_daily']}</td>
		<td class="stats1">{$TMPL['tot_pv_1_daily']}</td>
		<td class="stats1">{$TMPL['tot_pv_overall']}</td>
	</tr>
	<tr>
		<td class="stats2" style="text-align: left;">{$LNG['g_unq_in']}</th>
		<td class="stats2">{$TMPL['unq_in_avg_daily']}</td>
		<td class="stats2">{$TMPL['unq_in_0_daily']}</td>
		<td class="stats2">{$TMPL['unq_in_1_daily']}</td>
		<td class="stats2">{$TMPL['unq_in_overall']}</td>
	</tr>
	<tr>
		<td class="stats1" style="text-align: left;">{$LNG['g_tot_in']}</th>
		<td class="stats1">{$TMPL['tot_in_avg_daily']}</td>
		<td class="stats1">{$TMPL['tot_in_0_daily']}</td>
		<td class="stats1">{$TMPL['tot_in_1_daily']}</td>
		<td class="stats1">{$TMPL['tot_in_overall']}</td>
	</tr>
	<tr>
		<td class="stats2" style="text-align: left;">{$LNG['g_unq_out']}</th>
		<td class="stats2">{$TMPL['unq_out_avg_daily']}</td>
		<td class="stats2">{$TMPL['unq_out_0_daily']}</td>
		<td class="stats2">{$TMPL['unq_out_1_daily']}</td>
		<td class="stats2">{$TMPL['unq_out_overall']}</td>
	</tr>
	<tr>
		<td class="stats1" style="text-align: left;">{$LNG['g_tot_out']}</th>
		<td class="stats1">{$TMPL['tot_out_avg_daily']}</td>
		<td class="stats1">{$TMPL['tot_out_0_daily']}</td>
		<td class="stats1">{$TMPL['tot_out_1_daily']}</td>
		<td class="stats1">{$TMPL['tot_out_overall']}</td>
	</tr>
</table>
</div>
EndHTML;

    $TMPL['content'] = $this->do_skin('admin');
  }
}
?>
