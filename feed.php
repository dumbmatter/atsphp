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

// feed.php originally by Matt Wells <cerberus@users.berlios.de>

// Help prevent register_globals injection
$CONF = array();
$FORM = array();
$TMPL = array();

// Change the path to your full path if necessary
$CONF['path'] = '.';

// Connect to the database
require_once("{$CONF['path']}/settings_sql.php");
require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
$DB = new sql;
$DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database']);

// Settings
$settings = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_settings", __FILE__, __LINE__);
$CONF = array_merge($CONF, $settings);

// Combine the GET and POST input
$FORM = array_merge($_GET, $_POST);

// Get the category, default to no category
if (isset($FORM['cat']) && $FORM['cat']) {
  $TMPL['category'] = strip_tags($FORM['cat']);
  $category_sql = "AND category = '{$TMPL['category']}'";
}
else {
  $TMPL['category'] = $LNG['main_all'];
  $category_sql = '';
}

// Make ORDER BY clause
require_once("{$CONF['path']}/sources/misc/classes.php");
$order_by = base::rank_by()." DESC";

header('Content-Type: application/xml');
echo '<?xml version="1.0"?>';

$result = $DB->select_limit("SELECT *
                             FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats
                             WHERE sites.username = stats.username AND active = 1 {$category_sql}
                             ORDER BY {$order_by}
                            ", $CONF['num_list'], 0, __FILE__, __LINE__);
?>
<rss version="2.0">
	<channel>
		<title><?php echo $CONF['list_name']; ?></title>
		<link><?php echo $CONF['list_url']; ?>/</link>
		<description><?php echo 'Needs a description'; ?></description>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<generator>Aardvark Topsites PHP</generator>

		<item>
			<title><?php echo $CONF['list_name']; ?></title>
			<link><?php echo $CONF['list_url']; ?>/</link>
			<description></description>
			<guid><?php echo $CONF['list_url']; ?>/</guid>
		</item>


<?php
for($rank = 1; $row = $DB->fetch_array($result); $rank++) {
?>

		<item>
			<title><?php echo $rank . ' - ' . $row['title']; ?></title>
			<link><?php echo $CONF['list_url']; ?>/index.php?a=out&amp;u=<?php echo $row['username']; ?>&amp;go=1</link>
			<description><?php echo $row['description']; ?></description>
			<guid><?php echo $CONF['list_url'] . '/index.php?a=stats&amp;u=' . $row['username']; ?></guid>
		</item>

<?php
}
?>
	</channel>
</rss>
