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
/**
 * Feed Generator
 * @author Matt Wells <cerberus@users.berlios.de>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version 1.0
 */

// Help prevent register_globals injection
$CONF = array();
$FORM = array();
$TMPL = array();

/**
 * Path to Aardvark Topsites PHP folder on the server
 * @var string
 */
$CONF['path'] = dirname(__FILE__);
/**
 * Set to 1 to display SQL queries and GET/POST/COOKIE data
 * @var boolean
 */
$CONF['debug'] = 0;
/**
 * Connect to the database
 */
require_once("{$CONF['path']}/settings_sql.php");
require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
$DB = new sql;
$DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database']);
/**
 * Get Settings from DB
 */
$settings = $DB->fetch("SELECT * FROM {$CONF['sql_prefix']}_settings", __FILE__, __LINE__);
/**
 * @var array contains configeration settings
 */
$CONF = array_merge($CONF, $settings);
/**
 * Combines GET and POST data
 * @var array combination of GET and POST data
 */
$FORM = array_merge($_GET, $_POST);
/**
 * Get the category, default to no category
 */
if (isset($FORM['cat']) && $FORM['cat']) {
  $TMPL['category'] = $FORM['cat'];
  $category_sql = "AND category = '{$TMPL['category']}'";
}
else {
  $TMPL['category'] = $LNG['main_all'];
  $category_sql = '';
}
/**
 * How to Order the sites
 */
require_once("{$CONF['path']}/sources/misc/classes.php");
$order_by = base::rank_by()." DESC";
/**
 * Output XML header
 */
header('Content-Type: application/xml');
echo '<?xml version="1.0"?>';
/**
 * Select Sites from DB
 */
$result = $DB->select_limit("SELECT *
                             FROM {$CONF['sql_prefix']}_sites sites, {$CONF['sql_prefix']}_stats stats
                             WHERE sites.username = stats.username AND active = 1 {$category_sql}
                             ORDER BY {$order_by}
                            ", $CONF['num_list'], $start, __FILE__, __LINE__);

if(isset($FORM['t']) && 'atom' == $FORM['t']) {
  /**
   * Atom 1.0 Feed
   */
?>

<feed xmlns="http://www.w3.org/2005/Atom">
	<id><?php echo $CONF['list_url'];?></id>
	<title><?php echo $CONF['list_url'];?></title>
	<updated><?php echo date('Y-m-d\TH:i:s\Z'); ?></updated>

	<generator version="1.0">Aardvark Topsites PHP 5.1</generator>
	<link href="<?php echo $CONF['list_url'];?>"/>
	<link href="<?php echo $CONF['list_url'] . '/feed.php?t=atom';?>" rel="self"/>

<?php
  for($rank = 1; $entry = $DB->fetch_array($result); $rank++) {
?>

	<entry>
		<id><?php echo $entry['username'];?></id>
		<title><?php echo $rank . ' ' . $entry['title'];?></title>
		<updated><?php echo date('Y-m-d\TH:i:s\Z'); ?></updated>
		<summary><?php echo $item['description'];?></summary>
		<link rel="alternate" href="<?php echo $entry['url'];?>"/>
		<!--<link rel="alternate" href="<?php echo $CONF['list_url'];?>/index.php?a=out&amp;u=<?php echo $entry['username'];?>"/>-->
	</entry>

<?php
  }
  echo '</feed>';
}
else {
  /**
   * RSS 2.0 Feed
   */
?>

<rss version="2.0">
	<channel>
		<title><?php echo $CONF['list_name'];?></title>
		<link><?php echo $CONF['list_url'];?></link>
		<description><?php echo 'Needs a description';?></description>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<generator>Aardvark Topsites PHP 5.1</generator>

<?php
  for($rank = 1; $item = $DB->fetch_array($result); $rank++) {
?>

		<item>
			<title><?php echo $rank . ' - ' . $item['title'];?></title>
			<link><?php echo $item['url'];?></link>
			<!--<link><?php echo $CONF['list_url'];?>/index.php?a=out&amp;u=<?php echo $item['username'];?></link>-->
			<description><?php echo $item['description'];?></description>
			<guid><?php echo $entry['username'];?></guid>
		</item>

<?php
  }
?>
	</channel>
</rss>
<?php
}
?>