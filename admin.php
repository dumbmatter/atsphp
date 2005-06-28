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

error_reporting(E_ERROR | E_WARNING | E_PARSE);
set_magic_quotes_runtime(0);

// Settings
require_once 'config.php';
require_once 'config_skins.php';

// Require functions and process GET and POST input
require_once $CONFIG['path'].'/sources/functions.php';
$FORM = parse_form();

// The language file
require_once $CONFIG['path'].'/languages/'.$CONFIG['deflanguage'].'.php';

// Skins stuff
if ($FORM['skin_name']) { $TMPL['skin_name'] = $FORM['skin_name']; }
else { $TMPL['skin_name'] = isset($CONFIG['skin'][$FORM['cat']]) ? $CONFIG['skin'][$FORM['cat']] : $CONFIG['default_skin']; }
if (!is_dir($CONFIG['path'].'/skins/'.$TMPL['skin_name'])) { $TMPL['skin_name'] = $CONFIG['default_skin']; }
require_once $CONFIG['path'] . '/sources/template.php';

// Connect to the database
require_once $CONFIG['path'].'/sources/drivers/'.$CONFIG['sql'].'.php';
$db = new SQL;
$db->Connect($CONFIG['sql_host'], $CONFIG['sql_user'], $CONFIG['sql_pass'], $CONFIG['sql_database']);

$result = $db->Execute("SELECT admin_password FROM ".$CONFIG['sql_prefix']."_etc");
list($admin_password) = $db->FetchArray($result);

require_once $CONFIG['path'].'/sources/session.php';

$TMPL['sid'] = $FORM['sid'];

list($type, $data) = CheckSession($TMPL['sid']);

if ($type == 'admin') {
  if ($FORM['page'] == "approve") { approve(); }
  elseif ($FORM['page'] == "delete") { delete(); }
  elseif ($FORM['page'] == "edit") { edit(); }
  elseif ($FORM['page'] == "delete_review") { delete_review(); }
  elseif ($FORM['page'] == "email") { email(); }
  elseif ($FORM['page'] == "logout") { logout(); }
  elseif ($FORM['page'] == "manage") { manage(); }
  elseif ($FORM['page'] == "reset") { reset_stats(); }
  elseif ($FORM['page'] == "settings") { settings(); }
  elseif ($FORM['page'] == "settings_skins") { settings_skins(); }
  elseif ($FORM['page'] == "version") { version(); }
  else { main(); }

  UpdateSession($TMPL['sid']);
}
elseif($TMPL['sid']) { $TMPL['content'] = $LNG['a_login_session']; }
else { login(); }

$db->Close;

echo do_template("admin");

function approve () {
  global $CONFIG, $db, $FORM, $LNG, $TMPL;

  if (!$FORM['id']) {
    $result = $db->Execute("SELECT id, url, title FROM ".$CONFIG['sql_prefix']."_members WHERE active = 0");
    if ($db->NumRows($result)) {
      $TMPL['content'] = <<<EndHTML
<table class="darkbg" cellpadding="2" cellspacing="1" width="100%">
<tr class="mediumbg">
<td align="center" width="1%">${LNG['g_id']}</td>
<td width="100%">${LNG['table_title']}</td>
<td align="center">${LNG['a_approve']}</td>
<td align="center">${LNG['a_approve_del']}</td>
</tr>
EndHTML;

      while (list($id, $url, $title) = $db->FetchArray($result)) {
        $TMPL['content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td align="center" valign="top">$id</td>
<td valign="top" width="100%"><a href="$url" target="_blank">$title</a></td>
<td align="center" valign="top"><a href="admin.php?page=approve&id=$id&sid=${TMPL['sid']}">${LNG['a_approve']}</a></td>
<td align="center" valign="top"><a href="admin.php?page=delete&id=$id&sid=${TMPL['sid']}">${LNG['a_man_delete']}</a></td>
</tr>
EndHTML;
        if ($alt) { $alt = ''; }
        else { $alt = 'alt'; }
      }

      $TMPL['content'] .= "</table>";
    }
    else { $TMPL['content'] = $LNG['a_approve_none']; }
  }
  else {
    $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_members SET active = 1 WHERE id = ".$FORM['id']);
    $TMPL['content'] = $LNG['a_approve_done'];
  }
}

function delete () {
  global $CONFIG, $db, $FORM, $LNG, $TMPL;

  if (!$FORM['id']) {
    $TMPL['content'] = <<<EndHTML
<form action="admin.php" method="get">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="delete" />
<b>${LNG['a_del_mem']}</b><br />
${LNG['g_id']}: <input name="id" type="text" size="7" /><br />
<input type="submit" value="${LNG['a_del_mem']}" />
</form>
EndHTML;
  }
  elseif (!$FORM['nowarning']) {
    $result = $db->Execute("SELECT title FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']);
    list($title) = $db->FetchArray($result);
    if ($title) {
      $TMPL['content'] = <<<EndHTML
${LNG['a_del_warn']} "$title"?
<form action="admin.php" method="get">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="delete" />
<input name="nowarning" type="hidden" value="1" />
<input name="id" type="hidden" value="${FORM['id']}" /><br />
<input type="submit" value="${LNG['a_del_mem']}" />
</form>
EndHTML;
    }
    else { $TMPL['content'] = $LNG['a_del_dne'].' '.$FORM['id'].'.'; }
  }
  else {
    $result = $db->Execute("SELECT id FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']);
    list($id) = $db->FetchArray($result);
    if ($id) {
      $db->Execute("DELETE FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']);
      $db->Execute("DELETE FROM ".$CONFIG['sql_prefix']."_stats WHERE id2 = ".$FORM['id']);
      $db->Execute("DELETE FROM ".$CONFIG['sql_prefix']."_reviews WHERE id3 = ".$FORM['id']);
      $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_etc SET num_members = num_members - 1");

      $TMPL['content'] = $LNG['a_del_mems'];
    }
    else { error($LNG['a_edit_error_id'], 1, 0, "admin"); }
  }
}

function edit () {
  global $CONFIG, $db, $FORM, $LNG, $TMPL;

  if (!$FORM['id']) {
    $TMPL['content'] = <<<EndHTML
<form action="admin.php" method="get">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="edit" />
<b>${LNG['edit_header']}</b><br />
<input name="do" type="hidden" value="form" />
${LNG['g_id']}: <input name="id" type="text" size="7" /><br />
<input type="submit" value="${LNG['g_form_submit_long']}" />
</form>
EndHTML;
  }
  elseif ($FORM['id'] > 0 && $FORM['do'] != "submit") {
    $result = $db->Execute("SELECT id, password, url, title, description, category, urlbanner, email, active FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$FORM['id']);
    list($id, $password, $url, $title, $description, $category, $urlbanner, $email, $active) = $db->FetchArray($result);

    if ($id) {
      $catselect = "<select name=\"cat\">\n";
        foreach ($CONFIG['categories'] as $cat) {
        if ($cat == $category) { $catselect .= "<option value=\"$cat\" selected=\"selected\">$cat\n"; }
        else { $catselect .= "<option value=\"$cat\">$cat\n"; }
      }
      $catselect .= "</select>";

      if ($active) { $actives = "<option value=\"1\" selected=\"selected\">".$LNG['a_edit_active']."\n<option value=\"0\">".$LNG['a_edit_inactive']."\n"; }
      else { $actives = "<option value=\"1\">".$LNG['a_edit_active']."\n<option value=\"0\" selected=\"selected\">".$LNG['a_edit_inactive']; }

      $TMPL['content'] .= <<<EndHTML
<form action="admin.php" method="post">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="edit" />
<input name="do" type="hidden" value="submit" />
<input name="id" type="hidden" value="${id}" />
<table><tr><td>
${LNG['g_id']}
</td><td>
${id}
</td></tr><tr><td>
${LNG['g_url']}
</td><td>
<input name="url" type="text" size="50" value="${url}" />
</td></tr><tr><td>
${LNG['g_title']}
</td><td>
<input name="title" type="text" size="50" value="${title}" />
</td></tr><tr><td>
${LNG['g_description']}
</td><td>
<input name="description" type="text" size="50" value="${description}" />
</td></tr><tr><td>
${LNG['g_category']}
</td><td>
$catselect
</td></tr><tr><td>
${LNG['g_email']}
</td><td>
<input name="email" type="text" size="50" value="${email}" />
</td></tr><tr><td>
${LNG['g_bannerurl']}
</td><td>
<input name="urlbanner" type="text" size="50" value="${urlbanner}" />
</td></tr><tr><td>
${LNG['g_password']} - ${LNG['a_edit_password_blank']}
</td><td>
<input name="password" type="text" size="50" />
</td></tr><tr><td>
${LNG['a_edit_site_is']}
</td><td>
<select name="active">
$actives</select>
</td></tr><tr><td colspan="2" align="center">
<input type="submit" value="${LNG['g_form_submit_long']}" />
</td></tr></table>
</form>
EndHTML;
    }
    else { error($LNG['a_edit_error_id'], 1, 0, "admin"); }
  }
  elseif ($FORM['do'] == "submit") {
    if (!preg_match("/http/", $FORM['url'])) { $error_url = 1; }
    if (!preg_match("/.+\@.+\.\w+/", $FORM['email'])) { $error_email = 1; }
    if (!$FORM['title']) { $error_title = 1; }
    if ($FORM['urlbanner'] == '' || $FORM['urlbanner'] == "http://") {
      $TMPL['urlbanner'] = $CONFIG['defbanner'];
    }
    elseif ($CONFIG['max_banner_width'] && $CONFIG['max_banner_height']) {
      $size = getimagesize($FORM['urlbanner']);
      if ($size[0] > $CONFIG['max_banner_width'] || $size[1] > $CONFIG['max_banner_height']) {
        $error_urlbanner = 1;
      }
      if (!$size[0] && !$size[1]) { $error_urlbanner = 1; }
    }

    if ($error_url || $error_email || $error_title || $error_urlbanner) {
      $errormsg .= $LNG['join_error_forgot']."<br />\n";
      if ($error_url) { $errormsg .= $LNG['join_error_url']."<br />"; }
      if ($error_email) { $errormsg .= $LNG['join_error_email']."<br />"; }
      if ($error_title) { $errormsg .= $LNG['join_error_title']."<br />"; }
      if ($error_password) { $errormsg .= $LNG['join_error_password']."<br />"; }
      if ($error_urlbanner) { $errormsg .= $LNG['join_error_urlbanner']." ".$CONFIG['max_banner_width']."x".$CONFIG['max_banner_height']."<br />"; }
      $errormsg .= "<br />".$LNG['edit_error_back'];
      error($errormsg, 1, 0, "admin");
    }
    else {
      $TMPL['id'] = $FORM['id'];
      $TMPL['url'] = $FORM['url'];
      $TMPL['title'] = $FORM['title'];
      $TMPL['description'] = $FORM['description'];
      $TMPL['cat'] = $FORM['cat'];
      $TMPL['urlbanner'] = $FORM['urlbanner'];
      $TMPL['email'] = $FORM['email'];

      if ($FORM['password']) {
        $FORM['password'] = md5($FORM['password']);
        $password_sql = "password = '".$FORM['password']."', ";
      }

      $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_members SET ${password_sql}url = '".$TMPL['url']."', title = '".$TMPL['title']."', description = '".$TMPL['description']."', category = '".$TMPL['cat']."', urlbanner = '".$TMPL['urlbanner']."', email = '".$TMPL['email']."', active = ".$FORM['active']." WHERE id = ".$TMPL['id']);

      $TMPL['content'] = $LNG['edit_success']."<br /><br />\n".$LNG['edit_info_edited'];
    }
  }
}

function delete_review () {
  global $CONFIG, $db, $FORM, $LNG, $TMPL;

  if (!$FORM['id']) {
    $TMPL['content'] = <<<EndHTML
<form action="admin.php" method="post">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="delete_review" />
<b>${LNG['a_del_rev']}</b><br />
${LNG['a_del_rev_id']}: <input name="id" type="text" size="7" /><br />
<input type="submit" value="${LNG['g_form_submit_long']}" />
</form>
EndHTML;
  }
  else {
    $db->Execute("DELETE FROM ".$CONFIG['sql_prefix']."_reviews WHERE review_id = ".$FORM['id']);

    $TMPL['content'] = $LNG['a_del_rev_done'];
  }
}

function email () {
 global $CONFIG, $db, $LNG, $TMPL, $FORM;

 if($FORM['do'] == "send") {

   $admin_email_message = stripslashes($_POST['admin_email_message']);
   $failed = 0;
   $count = 0;
   $result = $db->Execute("SELECT email FROM ".$CONFIG['sql_prefix']."_members");
   while (list($email) = $db->FetchArray($result)) {
     if(!@mail($email, $FORM['subject'], $admin_email_message, "From: ".$TMPL['list_name']."<".$CONFIG['youremail'].">\nReply-to: ".$CONFIG['youremail'])) {
       $TMPL['content'] .= $LNG["a_email_not_sent"].$email.".<br />\n";
       $failed++;
     }
     else {
       $TMPL['content'] .= $LNG["a_email_msg_sent"].$email.".<br />\n";
       $first_email = 1;
     }
     $count++;
   }
   $TMPL['content'] .= "<br />\n".sprintf($LNG['a_email_sent'], ($count-$failed));
   if ($failed) $TMPL['content'] .= "  ".sprintf($LNG['a_email_failed'], $failed);
   $TMPL['content'] .= "</p>";
  }
  else {
  $TMPL['content'] = <<<EndHTML
<form action="admin.php" method="post">
<input name="page" type="hidden" value="email" />
<input name="do" type="hidden" value="send" />
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<b>${LNG['a_email_subject']}</b> <input name="subject" type="text" size="40" /><br /><br />
<b>${LNG['a_email_message']}</b><br /><textarea cols="60" rows="12" name="admin_email_message"></textarea><br />
<input type="submit" value="${LNG['g_form_submit_long']}" />
</form>
EndHTML;
  }
}

function login () {
  global $admin_password, $CONFIG, $FORM, $LNG, $TMPL;

  $FORM['pass'] = md5($FORM['pass']);

  if ($FORM['pass'] == $admin_password) {
    $session = new Session;
    $TMPL['sid'] = $session->GetID(24);
    $session->SetType('admin');
    $session->Create(1);

    main();
  }
  elseif ($FORM['pass'] != 'd41d8cd98f00b204e9800998ecf8427e') { error($LNG['a_login_invalidpw'], 1, 0, "admin"); }
  else {
    $TMPL['content'] = <<<EndHTML
<form action="admin.php" method="post">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
${LNG['g_password']}: <input name="pass" type="password" size="20" /><br />
<input type="submit" value="${LNG['g_form_submit_long']}" />
</form>
EndHTML;
  }
}

function logout () {
  global $LNG, $TMPL;

  KillSession($TMPL['sid']);

  $TMPL['content'] = $LNG['a_logout'];
}

function main () {
  global $CONFIG, $db, $LNG, $TMPL;

  $result = $db->Execute("SELECT id FROM ".$CONFIG['sql_prefix']."_members WHERE active = 0");
  $num = $db->NumRows($result);

  $TMPL['content'] = $LNG['a_main']."<br /><br />\n";

  if ($num) { $TMPL['content'] .= "<a href=\"admin.php?page=approve&sid=".$TMPL['sid']."\">".sprintf($LNG['a_main_approve'], $num)."</a><br /><br />"; }

  version();
}

function manage () {
  global $CONFIG, $db, $LNG, $TMPL, $FORM;

  $result = $db->Execute("SELECT num_members FROM ".$CONFIG['sql_prefix']."_etc");
  list($TMPL['nummem']) = $db->FetchArray($result);
  $numlist = 25;

  if ($TMPL['nummem'] > $numlist) {
    $num = $TMPL['nummem'];
    $done = 0;
    $TMPL['rankingsform'] = "<select name=\"start\">\n";
    while ($num > 0) {
      $start = $done * $numlist + 1;
      $end = ($done + 1) * $numlist;
      $FORM['start'] = $FORM['start'] ? $FORM['start'] : 1;

      if ($FORM['start'] == $start) {
        $TMPL['rankingsform'] .= "<option value=\"".$start."\" selected=\"selected\">".$start." - ".$end."\n";
      }
      else {
        $TMPL['rankingsform'] .= "<option value=\"".$start."\">".$start." - ".$end."\n";
      }

      $num = $num - $numlist;
      $done++;
    }
    $TMPL['rankingsform'] .= "</select>\n<input type=\"submit\" value=\"${LNG['g_form_submit_short']}\" />";
  }

  $TMPL['content'] = <<<EndHTML
<form action="admin.php" method="get">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="manage" />
${TMPL['rankingsform']}
</form><br />
<table class="darkbg" cellpadding="2" cellspacing="1" width="100%">
<tr class="mediumbg">
<td align="center" width="1%">${LNG['g_id']}</td>
<td width="100%">${LNG['table_title']}</td>
<td align="center" colspan="3">${LNG['a_man_actions']}</td>
</tr>
EndHTML;

  $start = $FORM['start'] ? $FORM['start'] - 1 : 0;

  $result = $db->SelectLimit("SELECT id, title, url, email FROM ".$CONFIG['sql_prefix']."_members ORDER BY id ASC", $numlist, $start);
  while (list($id, $title, $url, $email) = $db->FetchArray($result)) {
  $TMPL['content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td align="center" valign="top">$id</td>
<td valign="top" width="100%"><a href="$url" target="_blank">$title</a></td>
<td align="center" valign="top"><a href="admin.php?page=delete&id=$id&sid=${TMPL['sid']}">${LNG['a_man_delete']}</a></td>
<td align="center" valign="top"><a href="admin.php?page=edit&id=$id&sid=${TMPL['sid']}">${LNG['a_man_edit']}</a></td>
<td align="center" valign="top"><a href="mailto:$email">${LNG['a_man_email']}</a></td>
</tr>
EndHTML;
    if ($alt) { $alt = ''; }
    else { $alt = 'alt'; }
  }

  $TMPL['content'] .= "</table>";

}

function reset_stats () {
  global $CONFIG, $db, $FORM, $LNG, $TMPL;

  if (!$FORM['reset']) {
    $TMPL['content'] .= <<<EndHTML
${LNG['a_reset_confirm']}<br /><br />
<form action="admin.php" method="post">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="reset" />
<input name="reset" type="hidden" value="1" />
<input type="submit" value="${LNG['a_reset_stats']}" />
</form>
EndHTML;
  }
  else {
    $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_stats SET unq_pv_today = 0, unq_pv_1 = 0, unq_pv_2 = 0, unq_pv_3 = 0,
                                                             tot_pv_today = 0, tot_pv_1 = 0, tot_pv_2 = 0, tot_pv_3 = 0,
                                                             unq_in_today = 0, unq_in_1 = 0, unq_in_2 = 0, unq_in_3 = 0,
                                                             tot_in_today = 0, tot_in_1 = 0, tot_in_2 = 0, tot_in_3 = 0,
                                                             unq_out_today = 0, unq_out_1 = 0, unq_out_2 = 0, unq_out_3 = 0,
                                                             tot_out_today = 0, tot_out_1 = 0, tot_out_2 = 0, tot_out_3 = 0");

    $db->Execute("DELETE FROM ".$CONFIG['sql_prefix']."_iplog");

    $TMPL['content'] = $LNG['a_reset_done'];
  }
}

function settings () {
  global $CONFIG, $db, $FORM, $LNG, $TMPL;

  if (!$FORM['deflanguage']) {
    $language_array = array();
    $handle = opendir($CONFIG['path']."/languages");
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $file = str_replace(".php", "", $file);
        array_push($language_array, $file);
      }
    }
    foreach ($language_array as $value) {
      if ($value == $CONFIG['deflanguage']) { $languages .= "<option value=\"$value\" selected=\"selected\">$value\n"; }
      else { $languages .= "<option value=\"$value\">$value\n"; }
    }

    $sql_array = array();
    $handle = opendir($CONFIG['path']."/sources/drivers");
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $file = str_replace(".php", "", $file);
        array_push($sql_array, $file);
      }
    }
    foreach ($sql_array as $value) {
      if ($value == $CONFIG['sql']) { $sqls .= "<option value=\"$value\" selected=\"selected\">$value\n"; }
      else { $sqls .= "<option value=\"$value\">$value\n"; }
    }

    $rankingmethoda = array('unq_pv', 'tot_pv', 'unq_in', 'tot_in', 'unq_out', 'tot_out');
    foreach ($rankingmethoda as $value) {
      if ($value == $CONFIG['rankingmethod']) { $rankingmethods .= "<option value=\"$value\" selected=\"selected\">".$LNG['g_'.$value]."\n"; }
      else { $rankingmethods .= "<option value=\"$value\">".$LNG['g_'.$value]."\n"; }
    }

    if ($CONFIG['gateway']) { $gateways = "<option value=\"1\" selected=\"selected\">".$LNG['a_s_on']."\n<option value=\"0\">".$LNG['a_s_off']; }
    else { $gateways = "<option value=\"1\">".$LNG['a_s_on']."\n<option value=\"0\" selected=\"selected\">".$LNG['a_s_off']; }
    if ($CONFIG['search']) { $searchs = "<option value=\"1\" selected=\"selected\">".$LNG['a_s_on']."\n<option value=\"0\">".$LNG['a_s_off']; }
    else { $searchs = "<option value=\"1\">".$LNG['a_s_on']."\n<option value=\"0\" selected=\"selected\">".$LNG['a_s_off']; }
    if ($CONFIG['daymonth'] == 1) { $daymonths = "<option value=\"0\">".$LNG['a_s_days']."\n<option value=\"2\">".$LNG['a_s_weeks']."\n<option value=\"1\" selected=\"selected\">".$LNG['a_s_months']; }
    elseif ($CONFIG['daymonth'] == 2) { $daymonths = "<option value=\"0\">".$LNG['a_s_days']."\n<option value=\"2\" selected=\"selected\">".$LNG['a_s_weeks']."\n<option value=\"1\">".$LNG['a_s_months']; }
    else { $daymonths = "<option value=\"0\"\" selected=selected\">".$LNG['a_s_days']."\n<option value=\"2\">".$LNG['a_s_weeks']."\n<option value=\"1\">".$LNG['a_s_months']; }
    if ($CONFIG['featured']) { $featureds = "<option value=\"1\" selected=\"selected\">".$LNG['a_s_yes']."\n<option value=\"0\">".$LNG['a_s_no']."\n"; }
    else { $featureds = "<option value=\"1\">".$LNG['a_s_yes']."\n<option value=\"0\" selected=\"selected\">".$LNG['a_s_no']; }
    if ($CONFIG['active_default']) { $active_defaults = "<option value=\"0\">".$LNG['a_s_yes']."\n<option value=\"1\" selected=\"selected\">".$LNG['a_s_no']; }
    else { $active_defaults = "<option value=\"0\" selected=\"selected\">".$LNG['a_s_yes']."\n<option value=\"1\">".$LNG['a_s_no']; }
    if ($CONFIG['email_admin_on_join']) { $email_admin_on_joins = "<option value=\"1\" selected=\"selected\">".$LNG['a_s_yes']."\n<option value=\"0\">".$LNG['a_s_no']; }
    else { $email_admin_on_joins = "<option value=\"1\">".$LNG['a_s_yes']."\n<option value=\"0\" selected=\"selected\">".$LNG['a_s_no']; }
    if ($CONFIG['ranks_on_buttons'] == 1) { $ranks_on_buttonss = "<option value=\"1\" selected=\"selected\">".$LNG['a_s_yes']."\n<option value=\"0\">".$LNG['a_s_no']."\n"."\n<option value=\"2\">".$LNG['a_s_stat_buttons']; }
    elseif ($CONFIG['ranks_on_buttons'] == 2) { $ranks_on_buttonss = "<option value=\"1\">".$LNG['a_s_yes']."\n<option value=\"0\">".$LNG['a_s_no']."\n<option value=\"2\" selected=\"selected\">".$LNG['a_s_stat_buttons']; }
    else { $ranks_on_buttonss = "<option value=\"1\">".$LNG['a_s_yes']."\n<option value=\"0\" selected=\"selected\">".$LNG['a_s_no']."\n<option value=\"2\">".$LNG['a_s_stat_buttons']; }
    if ($CONFIG['gzip']) { $gzips = "<option value=\"1\" selected=\"selected\">".$LNG['a_s_yes']."\n<option value=\"0\">".$LNG['a_s_no']; }
    else { $gzips = "<option value=\"1\">".$LNG['a_s_yes']."\n<option value=\"0\" selected=\"selected\">".$LNG['a_s_no']; }
    foreach ($CONFIG['adbreaks'] as $key => $value) {
      if (!$adbreak) { $adbreak = "$key"; }
      else { $adbreak .= ",$key"; }
    }
    foreach ($CONFIG['categories'] as $value) {
      if (!$categories) { $categories = "$value"; }
      else { $categories .= ",$value"; }
    }

    $TMPL['content'] = <<<EndHTML
<table cellspacing="0" cellpadding="0"><tr><td>
<form action="admin.php" method="post">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="settings" />
<b>${LNG['a_s_general']}</b><br /><br />
${LNG['a_s_list_name']}<br />
<input name="list_name" type="text" size="50" value="${TMPL['list_name']}" /><br /><br />
${LNG['a_s_deflanguage']}<br />
<select name="deflanguage">
$languages</select><br /><br />
${LNG['a_s_path']}<br />
<input name="path" type="text" size="50" value="${CONFIG['path']}" /><br /><br />
${LNG['a_s_list_url']}<br />
<input name="list_url" type="text" size="50" value="${CONFIG['list_url']}" /><br /><br />
${LNG['a_s_skins_path']}<br />
<input name="skins_path" type="text" size="50" value="${CONFIG['skins_path']}" /><br /><br />
${LNG['a_s_skins_url']}<br />
<input name="skins_url" type="text" size="50" value="${CONFIG['skins_url']}" /><br /><br />
${LNG['a_s_youremail']}<br />
<input name="youremail" type="text" size="50" value="${CONFIG['youremail']}" /><br /><br /><br /><br />

<b>${LNG['a_s_sql']}</b><br /><br />
${LNG['a_s_sql_type']}<br />
<select name="sql">
$sqls</select><br /><br />
${LNG['a_s_sql_host']}<br />
<input name="sql_host" type="text" size="50" value="${CONFIG['sql_host']}" /><br /><br />
${LNG['a_s_sql_database']}<br />
<input name="sql_database" type="text" size="50" value="${CONFIG['sql_database']}" /><br /><br />
${LNG['a_s_sql_user']}<br />
<input name="sql_user" type="text" size="50" value="${CONFIG['sql_user']}" /><br /><br />
${LNG['a_s_sql_pass']}<br />
<input name="sql_pass" type="text" size="50" /><br /><br /><br /><br />

<b>${LNG['a_s_ranking']}</b><br /><br />
${LNG['a_s_categories']}<br />
<input name="categories" type="text" size="80" value="$categories" /><br /><br />
${LNG['a_s_numlist']}<br />
<input name="numlist" type="text" size="7" value="${CONFIG['numlist']}" /><br /><br />
${LNG['a_s_daymonth']}<br />
<select name="daymonth">
$daymonths</select><br /><br />
${LNG['a_s_rankingmethod']}<br />
<select name="rankingmethod">
$rankingmethods</select><br /><br />
${LNG['a_s_featured']}<br />
<select name="featured">
$featureds</select><br /><br />
${LNG['a_s_top']}<br />
<input name="top" type="text" size="7" value="${CONFIG['top']}" /><br /><br />
${LNG['a_s_adbreak']}<br />
<input name="adbreak" type="text" size="20" value="$adbreak" /><br /><br /><br /><br />

<b>${LNG['a_s_members']}</b><br /><br />
${LNG['a_s_active_default']}<br />
<select name="active_default">
$active_defaults</select><br /><br />
${LNG['a_s_delete_after']}<br />
<input name="delete_after" type="text" size="7" value="${CONFIG['delete_after']}" /><br /><br />
${LNG['a_s_email_admin_on_join']}<br />
<select name="email_admin_on_join">
$email_admin_on_joins</select><br /><br />
${LNG['a_s_max_banner_width']}<br />
<input name="max_banner_width" type="text" size="7" value="${CONFIG['max_banner_width']}" /><br /><br />
${LNG['a_s_max_banner_height']}<br />
<input name="max_banner_height" type="text" size="7" value="${CONFIG['max_banner_height']}" /><br /><br />
${LNG['a_s_defbanner']}<br />
<input name="defbanner" type="text" size="50" value="${CONFIG['defbanner']}" /><br /><br /><br /><br />

<b>${LNG['a_s_button']}</b><br /><br />
${LNG['a_s_ranks_on_buttons']}<br />
<select name="ranks_on_buttons">
$ranks_on_buttonss</select><br /><br />
${LNG['a_s_button_url']}<br />
<input name="button_url" type="text" size="50" value="${CONFIG['button_url']}" /><br /><br />
${LNG['a_s_button_dir']}<br />
<input name="button_dir" type="text" size="50" value="${CONFIG['button_dir']}" /><br /><br />
${LNG['a_s_button_ext']}<br />
<input name="button_ext" type="text" size="10" value="${CONFIG['button_ext']}" /><br /><br />
${LNG['a_s_button_num']}<br />
<input name="button_num" type="text" size="7" value="${CONFIG['button_num']}" /><br /><br /><br /><br />

<b>${LNG['a_s_searchs']}</b><br /><br />
${LNG['a_s_search']}<br />
<select name="search">
$searchs</select><br /><br />
${LNG['a_s_searchresults']}<br />
<input name="searchresults" type="text" size="20" value="${CONFIG['searchresults']}" /><br /><br /><br /><br />

<b>${LNG['a_s_other']}</b><br /><br />
${LNG['a_s_gzip']}<br />
<select name="gzip">
$gzips</select><br /><br />
${LNG['a_s_timeoffset']}<br />
<input name="timeoffset" type="text" size="20" value="${CONFIG['timeoffset']}" /><br /><br />
${LNG['a_s_gateway']}<br />
<select name="gateway">
$gateways</select><br /><br /><br /><br />
<input type="submit" value="${LNG['g_form_submit_long']}" />
</form>
</td></tr></table>
EndHTML;
  }
  else {
    require_once $CONFIG['path'].'/languages/'.$FORM['deflanguage'].'.php';

    $adbreaks = explode(',', $FORM['adbreak']);
    foreach ($adbreaks as $value) {
      if ($value) {
        if (!$newadbreaks) { $newadbreaks .= "$value => 1"; }
        else { $newadbreaks .= ", $value => 1"; }
      }
    }

    $categories = explode(',', $FORM['categories']);
    foreach ($categories as $value) {
      if ($value) {
        if (!$newcategories) { $newcategories .= "'$value'"; }
        else { $newcategories .= ", '$value'"; }
      }
    }

    if (!$FORM['sql_pass']) { $FORM['sql_pass'] = $CONFIG['sql_pass']; }

    $newconfig = <<<EndHTML
<?php
\$TMPL['list_name'] = '${FORM['list_name']}';
\$CONFIG['deflanguage'] = '${FORM['deflanguage']}';
\$CONFIG['path'] = '${FORM['path']}';
\$CONFIG['list_url'] = '${FORM['list_url']}';
\$TMPL['list_url'] = \$CONFIG['list_url'];
\$CONFIG['skins_path'] = '${FORM['skins_path']}';
\$CONFIG['skins_url'] = '${FORM['skins_url']}';
\$TMPL['skins_url'] = \$CONFIG['skins_url'];
\$CONFIG['youremail'] = '${FORM['youremail']}';

\$CONFIG['sql'] = '${FORM['sql']}';
\$CONFIG['sql_host'] = '${FORM['sql_host']}';
\$CONFIG['sql_database'] = '${FORM['sql_database']}';
\$CONFIG['sql_user'] = '${FORM['sql_user']}';
\$CONFIG['sql_pass'] = '${FORM['sql_pass']}';
\$CONFIG['sql_prefix'] = '${CONFIG['sql_prefix']}';

\$CONFIG['categories'] = array($newcategories);
\$CONFIG['numlist'] = ${FORM['numlist']};
\$CONFIG['daymonth'] = ${FORM['daymonth']};
\$CONFIG['rankingmethod'] = '${FORM['rankingmethod']}';
\$CONFIG['featured'] = ${FORM['featured']};
\$CONFIG['top'] = ${FORM['top']};
\$CONFIG['adbreaks'] = array($newadbreaks);

\$CONFIG['active_default'] = ${FORM['active_default']};
\$CONFIG['delete_after'] = ${FORM['delete_after']};
\$CONFIG['email_admin_on_join'] = ${FORM['email_admin_on_join']};
\$CONFIG['max_banner_width'] = ${FORM['max_banner_width']};
\$TMPL['max_banner_width'] = \$CONFIG['max_banner_width'];
\$CONFIG['max_banner_height'] = ${FORM['max_banner_height']};
\$TMPL['max_banner_height'] = \$CONFIG['max_banner_height'];
\$CONFIG['defbanner'] = '${FORM['defbanner']}';

\$CONFIG['ranks_on_buttons'] = ${FORM['ranks_on_buttons']};
\$CONFIG['button_url'] = '${FORM['button_url']}';
\$CONFIG['button_dir'] = '${FORM['button_dir']}';
\$CONFIG['button_ext'] = '${FORM['button_ext']}';
\$CONFIG['button_num'] = ${FORM['button_num']};

\$CONFIG['search'] = ${FORM['search']};
\$CONFIG['searchresults'] = ${FORM['searchresults']};

\$CONFIG['gzip'] = ${FORM['gzip']};
\$CONFIG['timeoffset'] = ${FORM['timeoffset']};
\$CONFIG['gateway'] = ${FORM['gateway']};

\$CONFIG['version'] = '4.2.1 (2004-08-02)';
\$TMPL['version'] = \$CONFIG['version'];
?>
EndHTML;

    $file = $CONFIG['path']."/config.php";
    $fh_config = fopen($file, "w");
    fwrite($fh_config, $newconfig);
    fclose($fh_config);
    $TMPL['content'] .= $LNG['a_s_updated'];
  }
}

function settings_skins () {
  global $CONFIG, $db, $FORM, $LNG, $TMPL;

  if (!$FORM['default_skin']) {
    $skins_array = array();
    $handle = opendir($CONFIG['skins_path']);
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != ".." && is_dir($CONFIG['path'].'/skins/'.$file)) {
        array_push($skins_array, $file);
      }
    }
    foreach ($skins_array as $value) {
      if ($value == $CONFIG['default_skin']) { $default_skins .= "<option value=\"$value\" selected=\"selected\">$value\n"; }
      else { $default_skins .= "<option value=\"$value\">$value\n"; }
    }

    $TMPL['content'] .= <<<EndHTML
<table cellspacing="0"><tr><td colspan="2">
<form action="admin.php" method="post">
<input name="sid" type="hidden" value="${TMPL['sid']}" />
<input name="page" type="hidden" value="settings_skins" />
${LNG['a_s_tmpl_default_skin']}<br />
<select name="default_skin">
$default_skins</select><br /><br />
${LNG['a_s_tmpl_diff_skins']}<br /><br />
</td></tr>
EndHTML;

    $num = 0;
    $TMPL['skin_form'] = array();
    foreach ($CONFIG['categories'] as $value) {
      $num++;
      $TMPL['content'] .= "<input type=\"hidden\" name=\"catname_$num\" value=\"$value\" />";
      $TMPL['content'] .= "<tr><td>$value</td>\n";
      $TMPL['content'] .= "<td><select name=\"default_skin_$num\">\n";
      if (!$CONFIG['skin'][$value]) { $CONFIG['skin'][$value] = 'Default'; }
      foreach ($skins_array as $value2) {
        if ($CONFIG['skin'][$value] == $value2) { $TMPL['content'] .= "<option value=\"$value2\" selected=\"selected\">$value2\n"; }
        else { $TMPL['content'] .= "<option value=\"$value2\">$value2\n"; }
      }
      $TMPL['content'] .= "</select></td></tr>\n";
    }

    $TMPL['content'] .= <<<EndHTML
<input type="hidden" name="num" value="$num" />
<tr><td>
<input type="submit" value="${LNG['g_form_submit_long']}" />
</form>
</td></tr></table>
EndHTML;
  }
  else {
    for ($i = 1; $i <= $FORM['num']; $i++) {
      $skins_settings .= "\n\$CONFIG['skin']['".$FORM['catname_'.$i]."'] = '".$FORM['default_skin_'.$i]."';";
    }

    $newconfig = <<<EndHTML
<?php
\$CONFIG['default_skin'] = '${FORM['default_skin']}';
$skins_settings
?>
EndHTML;

    $file = $CONFIG['path']."/config_skins.php";
    $fh_config = fopen($file, "w");
    fwrite($fh_config, $newconfig);
    fclose($fh_config);
    $TMPL['content'] .= $LNG['a_s_updated'];
  }
}

function version () {
  global $CONFIG, $LNG, $TMPL;

  $TMPL['content'] .= $LNG['a_version_your'].": ".$CONFIG['version']."<br />".$LNG['a_version_latest'].": <img src=\"http://www.aardvarkind.com/topsitesphp/version.png\" style=\"vertical-align: bottom\" /><br /><br />\n".$LNG['a_version_new'];
}
?>
