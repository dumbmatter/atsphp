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

// Process GET and POST input
function strip ($value) {
  $value = str_replace('&#032;', ' ', $value);
  $value = preg_replace('/&(?!#[0-9]+;)/s', '&amp;', $value);
  $value = str_replace('<', '&lt;', $value);
  $value = str_replace('>', '&gt;', $value);
  $value = str_replace('"', '&quot;', $value);
  $value = str_replace('\'', '&#039;', $value);
  $value = preg_replace('/\n/', '<br />', $value);
  $value = preg_replace('/\r/', '', $value);
  $value = str_replace('\\', '', $value);
  $value = stripslashes($value);
  return $value;
}
$FORM = array_map('strip', array_merge($_GET, $_POST));

echo <<<EndHTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Aardvark Topsites PHP - Installation</title>
<link rel="stylesheet" type="text/css" media="screen" title="Default" href="skins/Default/default.css" />
</head>
<body>
<center>
<img src="skins/Default/logo.png" width="728" height="66" alt="Aardvark Topsites PHP" border="0" />
</center>
<table align="center" width="728" style="border: 2px solid #069;"><tr><td>
EndHTML;

if (!$FORM['a']) {
  $language_array = array();
  $handle = opendir("languages");
  while (false !== ($file = readdir($handle))) {
    if ($file != "." && $file != "..") {
      $file = str_replace(".php", "", $file);
      array_push($language_array, $file);
    }
  }
  foreach ($language_array as $value) {
    if ($value == "english") { $languages .= "<option value=\"$value\" selected=\"selected\">$value\n"; }
    else { $languages .= "<option value=\"$value\">$value\n"; }
  }

  $sql_array = array();
  $handle = opendir("sources/drivers");
  while (false !== ($file = readdir($handle))) {
    if ($file != "." && $file != "..") {
      $file = str_replace(".php", "", $file);
      array_push($sql_array, $file);
    }
  }
  foreach ($sql_array as $value) {
    if ($value == "mysql") { $sqls .= "<option value=\"$value\" selected=\"selected\">$value\n"; }
    else { $sqls .= "<option value=\"$value\">$value\n"; }
  }

  echo <<<EndHTML
Welcome to the Aardvark Topsites PHP!  This script will make installation easy and painless.  All you have to do is fill in the form below and press Submit.  These settings are just the ones required to get your topsites running.  You can tweak it more after you install it.<br /><br />
<form action="install.php" method="post">
<input name="a" type="hidden" value="done" />

<b>General Settings</b><br /><br />
Admin password<br />
<input name="admin_password" type="text" size="20" /><br /><br />
Default Language<br />
<select name="deflanguage">
$languages</select><br /><br />
The full path to this directory - on most servers you can leave it set to .<br />
<input name="path" type="text" size="50" value="." /><br /><br />
The url to this directory<br />
<input name="list_url" type="text" size="50" value="http://www.you.com/topsites" /><br /><br />
Your email address<br />
<input name="youremail" type="text" size="50" /><br /><br /><br /><br />
<b>SQL Settings</b><br /><br />
Database Type<br />
<select name="sql">
$sqls</select><br /><br />
Host<br />
<input name="sql_host" type="text" size="50" value="localhost" /><br /><br />
Database<br />
<input name="sql_database" type="text" size="50" /><br /><br />
Username<br />
<input name="sql_user" type="text" size="50" /><br /><br />
Password<br />
<input name="sql_pass" type="password" size="50" /><br /><br />
Table prefix - only change this if you're running more than one list from the same database<br />
<input name="sql_prefix" type="text" size="50" value="ats" /><br /><br /><br /><br />
<input type="submit" value="Submit" />
</form>
EndHTML;
}
elseif ($FORM['a'] == "done") {
  if (!$FORM['admin_password']) { $error .= "Admin Password<br />\n"; }
  if (!$FORM['path']) { $error .= "Path<br />\n"; }
  if (!$FORM['list_url']) { $error .= "List URL<br />\n"; }
  if (!$FORM['youremail']) { $error .= "You Email Address<br />"; }
  if (!$FORM['sql_host']) { $error .= "SQL Host<br />"; }
  if (!$FORM['sql_database']) { $error .= "SQL Database<br />"; }
  if (!$FORM['sql_user']) { $error .= "SQL Username<br />"; }
  if (!$FORM['sql_pass']) { $error .= "SQL Password<br />"; }

  if ($error) { echo "ERROR!  You forgot to fill out the following form fields:<br /><br />\n$error\nPlease go back and fill out all the form fields."; }
  else {
    $newconfig = <<<EndHTML
<?php
\$TMPL['list_name'] = 'My Topsites List';
\$CONFIG['deflanguage'] = '${FORM['deflanguage']}';
\$CONFIG['path'] = '${FORM['path']}';
\$CONFIG['list_url'] = '${FORM['list_url']}';
\$TMPL['list_url'] = \$CONFIG['list_url'];
\$CONFIG['skins_path'] = '${FORM['path']}/skins';
\$CONFIG['skins_url'] = '${FORM['list_url']}/skins';
\$TMPL['skins_url'] = \$CONFIG['skins_url'];
\$CONFIG['youremail'] = '${FORM['youremail']}';

\$CONFIG['sql'] = '${FORM['sql']}';
\$CONFIG['sql_host'] = '${FORM['sql_host']}';
\$CONFIG['sql_database'] = '${FORM['sql_database']}';
\$CONFIG['sql_user'] = '${FORM['sql_user']}';
\$CONFIG['sql_pass'] = '${FORM['sql_pass']}';
\$CONFIG['sql_prefix'] = '${FORM['sql_prefix']}';

\$CONFIG['categories'] = array('Category 1', 'Category 2', 'Category 3');
\$CONFIG['numlist'] = 10;
\$CONFIG['daymonth'] = 0;
\$CONFIG['rankingmethod'] = 'unq_pv';
\$CONFIG['featured'] = 0;
\$CONFIG['top'] = 2;
\$CONFIG['adbreaks'] = array();

\$CONFIG['active_default'] = 1;
\$CONFIG['delete_after'] = 14;
\$CONFIG['email_admin_on_join'] = 0;
\$CONFIG['max_banner_width'] = 468;
\$TMPL['max_banner_width'] = \$CONFIG['max_banner_width'];
\$CONFIG['max_banner_height'] = 60;
\$TMPL['max_banner_height'] = \$CONFIG['max_banner_height'];
\$CONFIG['defbanner'] = '${FORM['list_url']}/images/button.png';

\$CONFIG['ranks_on_buttons'] = 1;
\$CONFIG['button_url'] = '${FORM['list_url']}/images/button.png';
\$CONFIG['button_dir'] = '${FORM['list_url']}/images';
\$CONFIG['button_ext'] = 'png';
\$CONFIG['button_num'] = 5;

\$CONFIG['search'] = 1;
\$CONFIG['searchresults'] = 10;

\$CONFIG['gzip'] = 0;
\$CONFIG['timeoffset'] = 0;
\$CONFIG['gateway'] = 1;

\$CONFIG['version'] = '4.2.1 (2004-08-02)';
\$TMPL['version'] = \$CONFIG['version'];
?>
EndHTML;

    $file = $FORM['path']."/config.php";
    $fh_config = fopen($file, "w") or die("You do not have permission to write to ".$FORM['path']."/config.php.  Make sure you CHMOD 666 config.php.");
    fwrite($fh_config, $newconfig);
    fclose($fh_config);

    $admin_password = md5($FORM['admin_password']);

    // Connect to the database
    require_once 'sources/drivers/'.$FORM['sql'].'.php';
    $db = new SQL;
    $db->Connect($FORM['sql_host'], $FORM['sql_user'], $FORM['sql_pass'], $FORM['sql_database']);

    // Create the tables
    $db->Execute("CREATE TABLE ".$FORM['sql_prefix']."_etc (
                    last_newday tinyint NOT NULL default '0',
                    num_members bigint UNSIGNED NOT NULL default '0',
                    highest_id bigint UNSIGNED NOT NULL default '0',
                    admin_password varchar(32) NOT NULL
                  )");
    $db->Execute("INSERT INTO ".$FORM['sql_prefix']."_etc VALUES (0, 0, 0, '".$admin_password."')");

    $db->Execute("CREATE TABLE ".$FORM['sql_prefix']."_iplog (
                    ip_address varchar(32) NOT NULL,
                    id4 bigint UNSIGNED NOT NULL,
                    unq_pv bool,
                    unq_in bool,
                    unq_out bool,
                    rate bool
                  )");

    $db->Execute("CREATE TABLE ".$FORM['sql_prefix']."_members (
                    id bigint UNSIGNED NOT NULL,
                    password varchar(32) NOT NULL,
                    url varchar(70) NOT NULL,
                    title varchar(32) NOT NULL,
                    description varchar(255) NOT NULL,
                    category varchar(255) NOT NULL,
                    urlbanner varchar(90) NOT NULL,
                    email varchar(70) NOT NULL,
                    total_ratings bigint UNSIGNED NOT NULL,
                    num_ratings bigint UNSIGNED NOT NULL,
                    jointime int(10) NOT NULL,
                    active bool default '1',
                    PRIMARY KEY (id)
                  )");

    $db->Execute("CREATE TABLE ".$FORM['sql_prefix']."_reviews (
                    id3 bigint UNSIGNED NOT NULL,
                    review_id bigint UNSIGNED NOT NULL,
                    review_date datetime,
                    review text NOT NULL,
                    PRIMARY KEY(review_id)
                  )");

    $db->Execute("CREATE TABLE ".$FORM['sql_prefix']."_sessions (
                    type varchar(7),
                    id varchar(24),
                    created int(10),
                    data varchar(24)
                  )");

    $db->Execute("CREATE TABLE ".$FORM['sql_prefix']."_stats (
                    id2 bigint UNSIGNED NOT NULL,
                    old_rank bigint UNSIGNED default '0',
                    days_inactive int UNSIGNED default '0',
                    unq_pv_today bigint UNSIGNED default '0',
                    unq_pv_1 bigint UNSIGNED default '0',
                    unq_pv_2 bigint UNSIGNED default '0',
                    unq_pv_3 bigint UNSIGNED default '0',
                    tot_pv_today bigint UNSIGNED default '0',
                    tot_pv_1 bigint UNSIGNED default '0',
                    tot_pv_2 bigint UNSIGNED default '0',
                    tot_pv_3 bigint UNSIGNED default '0',
                    unq_in_today bigint UNSIGNED default '0',
                    unq_in_1 bigint UNSIGNED default '0',
                    unq_in_2 bigint UNSIGNED default '0',
                    unq_in_3 bigint UNSIGNED default '0',
                    tot_in_today bigint UNSIGNED default '0',
                    tot_in_1 bigint UNSIGNED default '0',
                    tot_in_2 bigint UNSIGNED default '0',
                    tot_in_3 bigint UNSIGNED default '0',
                    unq_out_today bigint UNSIGNED default '0',
                    unq_out_1 bigint UNSIGNED default '0',
                    unq_out_2 bigint UNSIGNED default '0',
                    unq_out_3 bigint UNSIGNED default '0',
                    tot_out_today bigint UNSIGNED default '0',
                    tot_out_1 bigint UNSIGNED default '0',
                    tot_out_2 bigint UNSIGNED default '0',
                    tot_out_3 bigint UNSIGNED default '0',
                    PRIMARY KEY (id2)
                  )");

    $db->Close;

    echo "Your topsites list should be fully functioning now.<br /><br />\n";
    echo "<a href=\"index.php\">Your Topsites List</a><br />\n";
    echo "<a href=\"admin.php\">Admin</a><br />\n";
    echo "<a href=\"http://www.aardvarkind.com/topsitesphp/manual/4.2.1/\">Manual</a>";
  }
}

echo <<<EndHTML
</td></tr></table>
</body>
</html>
EndHTML;
?>
