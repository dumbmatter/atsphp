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
  $dir = opendir("{$CONF['path']}/languages/");
  while (false !== ($file = readdir($dir))) {
    if ($file != '.' && $file != '..') {
      $file = str_replace('.php', '', $file);
      require "{$CONF['path']}/languages/{$file}.php";
      $TMPL['content'] .= "<option value=\"{$file}\">{$translation}</option>\n";
    }
  }
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

  $dir = opendir("{$CONF['path']}/sources/sql/");
  while (false !== ($file = readdir($dir))) {
    if ($file != '.' && $file != '..') {
      $file = str_replace('.php', '', $file);
      require "{$CONF['path']}/sources/sql/{$file}.php";
      $sql_menu = "<option value=\"{$file}\">{$database}</option>\n";
    }
  }

  $TMPL['content'] = <<<EndHTML
{$LNG['install_welcome']}<br /><br />
<strong>This is an alpha release.  Some features are incomplete and the script has not been thoroughly tested.</strong><br /><br />
Do not forget to give feedback.  Let us know what you think about this alpha release and your input will help mold the final version.  <a href="http://www.aardvarkind.com/forums/viewforum.php?f=12">Post at the development forum.</a><br /><br />
<form action="index.php" method="post">
<input name="l" type="hidden" value="{$FORM['l']}" />
<fieldset>
<legend>{$LNG['a_s_general']}</legend>
<label>{$LNG['a_s_admin_password']}<br />
<input name="admin_password" type="text" size="20" /><br /><br />
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
// Validate form
  require_once("{$CONF['path']}/sources/sql/{$FORM['sql']}.php");
  $DB = new sql;
  if ($DB->connect($FORM['sql_host'], $FORM['sql_username'], $FORM['sql_password'], $FORM['sql_database'])) {
    $file = "{$CONF['path']}/settings_sql.php";
    if ($fh = @fopen($file, 'w')) {
// Build $settings_sql
      fwrite($fh, $settings_sql);
      fclose($fh);
// Do database stuff
      $TMPL['content'] = 'hi';
    }
    else {
      $TMPL['content'] = $LNG['install_error_chmod'];
    }
  }
  else {
    $TMPL['content'] = $LNG['install_error_sql'];
  }
}

echo $TMPL['content'];
?>
