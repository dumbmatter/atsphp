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

// Require functions and process GET and POST input
require_once $CONFIG['path'].'/sources/functions.php';
$FORM = parse_form();

echo <<<EndHTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Aardvark Topsites PHP - Upgrade</title>
<link rel="stylesheet" type="text/css" media="screen" title="Default" href="templates/default.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="Dark" href="templates/default_dark.css" />
</head>
<body>
<center>
<img src="templates/logo.png" width="728" height="66" alt="Aardvark Topsites PHP" border="0" />
</center>
<table align="center" width="728" style="border: 2px solid #069;"><tr><td>
EndHTML;

if (!$FORM['upgrade']) {
  echo <<<EndHTML
This script will upgrade your topsites list from Aardvark Topsites PHP 4.0.x.<br /><br />
<form action="upgrade-4.0.x.php" method="post">
<input type="hidden" name="upgrade" value="1" />
<input type="submit" value="Upgrade" />
</form>
EndHTML;
}
else {
  // Connect to the database
  require_once $CONFIG['path'].'/sources/drivers/mysql.php';
  $db = new SQL;
  $db->Connect($CONFIG['sql_host'], $CONFIG['sql_user'], $CONFIG['sql_pass'], $CONFIG['sql_database']);

  $db->Execute("ALTER TABLE ".$CONFIG['sql_prefix']."_members ADD category VARCHAR(255) NOT NULL AFTER description");
  $db->Execute("ALTER TABLE ".$CONFIG['sql_prefix']."_stats ADD old_rank BIGINT UNSIGNED default '0' AFTER id2,
                                                            ADD days_inactive INT UNSIGNED default '0' AFTER old_rank");
  $db->Execute("CREATE TABLE ".$CONFIG['sql_prefix']."_sessions (
                  type varchar(7),
                  id varchar(24),
                  created int(10),
                  data varchar(24)
                )");

  $newconfig = <<<EndHTML
<?php
\$TMPL['list_name'] = '${CONFIG['list_name']}';
\$CONFIG['deflanguage'] = '${CONFIG['deflanguage']}';
\$CONFIG['path'] = '${CONFIG['path']}';
\$CONFIG['list_url'] = '${CONFIG['list_url']}';
\$TMPL['list_url'] = \$CONFIG['list_url'];
\$CONFIG['skins_path'] = '${CONFIG['templates_path']}';
\$CONFIG['skins_url'] = '${CONFIG['templates_url']}';
\$TMPL['skins_url'] = \$CONFIG['skins_url'];
\$CONFIG['youremail'] = '${CONFIG['youremail']}';

\$CONFIG['sql'] = 'mysql';
\$CONFIG['sql_host'] = '${CONFIG['sql_host']}';
\$CONFIG['sql_database'] = '${CONFIG['sql_database']}';
\$CONFIG['sql_user'] = '${CONFIG['sql_user']}';
\$CONFIG['sql_pass'] = '${CONFIG['sql_pass']}';
\$CONFIG['sql_prefix'] = '${CONFIG['sql_prefix']}';

\$CONFIG['categories'] = array('Category 1', 'Category 2');
\$CONFIG['numlist'] = ${CONFIG['numlist']};
\$CONFIG['daymonth'] = ${CONFIG['daymonth']};
\$CONFIG['rankingmethod'] = '${CONFIG['rankingmethod']}';
\$CONFIG['featured'] = 0;
\$CONFIG['top'] = ${CONFIG['top']};
\$CONFIG['adbreaks'] = array();

\$CONFIG['active_default'] = ${CONFIG['active_default']};
\$CONFIG['delete_after'] = 14;
\$CONFIG['email_admin_on_join'] = ${CONFIG['email_admin_on_join']};
\$CONFIG['max_banner_width'] = ${CONFIG['max_banner_width']};
\$TMPL['max_banner_width'] = \$CONFIG['max_banner_width'];
\$CONFIG['max_banner_height'] = ${CONFIG['max_banner_height']};
\$TMPL['max_banner_height'] = \$CONFIG['max_banner_height'];
\$CONFIG['defbanner'] = '${CONFIG['defbanner']}';

\$CONFIG['ranks_on_buttons'] = ${CONFIG['ranks_on_buttons']};
\$CONFIG['button_url'] = '${CONFIG['button_url']}';
\$CONFIG['button_dir'] = '${CONFIG['button_dir']}';
\$CONFIG['button_ext'] = '${CONFIG['button_ext']}';
\$CONFIG['button_num'] = ${CONFIG['button_num']};

\$CONFIG['search'] = ${CONFIG['search']};
\$CONFIG['searchresults'] = ${CONFIG['searchresults']};

\$CONFIG['gzip'] = ${CONFIG['gzip']};
\$CONFIG['timeoffset'] = ${CONFIG['timeoffset']};
\$CONFIG['gateway'] = ${CONFIG['gateway']};

\$CONFIG['version'] = '4.2.1 (2004-08-02)';
\$TMPL['version'] = \$CONFIG['version'];
?>
EndHTML;

  $file = $CONFIG['path']."/config.php";
  $fh_config = fopen($file, "w");
  fwrite($fh_config, $newconfig);
  fclose($fh_config);

  echo "Your list is now updated.  You should delete upgrade-4.0.x.php now.";
}

$db->Close;

echo <<<EndHTML
</td></tr></table>
</body>
</html>
EndHTML;
?>
