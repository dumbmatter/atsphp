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

// Help prevent register_globals injection
define('ATSPHP', 1);
$CONF = array();
$FORM = array();
$TMPL = array();

// Change the path to your full path if necessary
$CONF['path'] = '.';

// Connect to the database
require_once("{$CONF['path']}/settings_sql.php");
require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
$DB = "sql_{$CONF['sql']}";
$DB = new $DB;
$DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database']);

$image = imagecreate(140, 30);

$white = imagecolorallocate($image, 255, 255, 255);
$gray = imagecolorallocate($image, 210, 210, 210);
$black = imagecolorallocate($image, 0, 0, 0);

$string = mt_rand();
$string = substr(sha1($string), 0, 6);
$string = str_replace(array('0', 'O', 'o', '9', 'g', 'G'), rand(1, 8), $string);

for ($i=0; $i<25; $i++) {
  $x1 = rand(0,140);
  $y1 = rand(0,30);
  $x2 = rand(0,140);
  $y2 = rand(0,30);
  imageline($image, $x1, $y1, $x2, $y2 , $gray);  
}

$x = 0;
for ($i=0; $i<6; $i++) {
  $size = rand(4, 5);
  $x = $x + rand(12 , 20);
  $y = rand(7 , 12); 
  imagestring($image, $size, $x, $y, $string{$i} , $black); 
}

$image2 = imagecreate(280, 60);
imagecopyresized($image2, $image, 0, 0, 0, 0, 280, 60, 140, 30);
imagedestroy($image);

$ip = $DB->escape($_SERVER['REMOTE_ADDR'], 1);

$DB->query("DELETE FROM {$CONF['sql_prefix']}_sessions WHERE data LIKE '{$ip}|%'", __FILE__, __LINE__);
$data = "{$ip}|" . sha1($string);

require_once("{$CONF['path']}/sources/misc/session.php");
$session = new session;
$session->create('captcha', $data);

header('Pragma: no-cache');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Content-type: image/png');
imagepng($image2);
imagedestroy($image2);
?>
