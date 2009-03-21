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

// This file is based on HN Captcha 1.3 by Horst Nogajski.
// http://hn273.users.phpclasses.org/browse/package/1569.html

// Help prevent register_globals injection
define('ATSPHP', 1);
$CONF = array();
$FORM = array();
$TMPL = array();

// Change the path to your full path if necessary
$CONF['path'] = '.';

// You can change most of these settings if you want to spice up your captcha
$TTF_folder = "{$CONF['path']}/fonts/";
$chars = array(4, 5, 6); // How many chars the generated text should have (default: 6 or 7)
$minsize = 30; // The minimum size a Char should have (default: 30-50)
$maxsize = 60; // The maximum size a Char can have (default: 50-70)
$maxrotation = 30; // The maximum degrees a Char should be rotated. Set it to 30 means a random rotation between -30 and 30.
$noise = 1; // Background noise On/Off (1/0); if is Off, a grid will be created
$debug = 0; // Outputs configuration values for testing
$jpegquality = 80; // image quality
$noisefactor = 9; // this will multiplyed with number of chars

$ckey = array_rand($chars);
$chars = $chars[$ckey];

// Connect to the database
require_once("{$CONF['path']}/settings_sql.php");
require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
$DB = "sql_{$CONF['sql']}";
$DB = new $DB;
$DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database']);

$string = mt_rand();
$string = substr(sha1($string), 0, $chars);
$string = str_replace(array('0', 'O', 'o', '9', 'g', 'G', 'b', 'B', '6'), rand(1, 5), $string);

$TTF_RANGE = array();
$dir = opendir($TTF_folder);
while (false !== ($file = readdir($dir))) {
  if (is_file($TTF_folder.$file)) {
    array_push($TTF_RANGE, $file);
  }
}

// check TrueTypeFonts
if($debug) echo "\n<br>-Captcha-Debug: Check given TrueType-Array! (".count($TTF_RANGE).")";
$temp = array();
foreach($TTF_RANGE as $key => $value) {
  if (is_readable($TTF_folder.$value)) {
    $temp[] = $value;
  }
}
$TTF_RANGE = $temp;
if($debug) echo "\n<br>-Captcha-Debug: Valid TrueType-files: (".count($TTF_RANGE).")";
if(count($TTF_RANGE) < 1) die('No Truetypefont available for the CaptchaClass.');

// select first TrueTypeFont
$TTF_file = change_TTF();
if($debug) echo "\n<br>-Captcha-Debug: Set current TrueType-File: (".$TTF_file.")";

// get number of noise-chars for background if is enabled
$nb_noise = $noise ? ($chars * $noisefactor) : 0;
if($debug) echo "\n<br>-Captcha-Debug: Set number of noise characters to: (".$nb_noise.")";

// set dimension of image
$lx = ($chars + 1) * (int)(($maxsize + $minsize) / 1.5);
$ly = (int)(2.4 * $maxsize);
if($debug) echo "\n<br>-Captcha-Debug: Set image dimension to: (".$lx." x ".$ly.")";
$image = imagecreatetruecolor($lx, $ly);

// Set Backgroundcolor
list($r, $g, $b) = random_color(224, 256);
$back =  imagecolorallocate($image, $r, $g, $b);
imagefilledrectangle($image, 0, 0, $lx, $ly, $back);
if($debug) echo "\n<br>-Captcha-Debug: We allocate one color for Background: (".$r."-".$g."-".$b.")";

// fill with noise or grid
if($nb_noise > 0) {
  // random characters in background with random position, angle, color
  if($debug) echo "\n<br>-Captcha-Debug: Fill background with noise: (".$nb_noise.")";
  for($i=0; $i < $nb_noise; $i++) {
    $size = intval(rand((int)($minsize / 2.3), (int)($maxsize / 1.7)));    $angle = intval(rand(0, 360));
    $x = intval(rand(0, $lx));
    $y = intval(rand(0, (int)($ly - ($size / 5))));
    list($r, $g, $b) = random_color(160, 224);
    $color = imagecolorallocate($image, $r, $g, $b);
    $text = chr(intval(rand(45,250)));
    imagettftext($image, $size, $angle, $x, $y, $color, change_TTF(), $text);
  }
}
else {
  // generate grid
  if($debug) echo "\n<br>-Captcha-Debug: Fill background with x-gridlines: (".(int)($lx / (int)($minsize / 1.5)).")";
  for($i=0; $i < $lx; $i += (int)($minsize / 1.5)) {
    list($r, $g, $b) = random_color(160, 224);
    $color = imagecolorallocate($image, $r, $g, $b);
    imageline($image, $i, 0, $i, $ly, $color);
  }
  if($debug) echo "\n<br>-Captcha-Debug: Fill background with y-gridlines: (".(int)($ly / (int)(($minsize / 1.8))).")";
  for($i=0 ; $i < $ly; $i += (int)($minsize / 1.8)) {
    list($r, $g, $b) = random_color(160, 224);
    $color = imagecolorallocate($image, $r, $g, $b);
    imageline($image, 0, $i, $lx, $i, $color);
  }
}

// generate Text
if($debug) echo "\n<br>-Captcha-Debug: Fill forground with chars and shadows: (".$chars.")";
for($i=0, $x = intval(rand($minsize,$maxsize)); $i < $chars; $i++) {
  $text = $string{$i};
  $angle = intval(rand(($maxrotation * -1), $maxrotation));
  $size = intval(rand($minsize, $maxsize));
  $y = intval(rand((int)($size * 1.5), (int)($ly - ($size / 7))));
  list($r, $g, $b) = random_color(0, 127);
  $color = imagecolorallocate($image, $r, $g, $b);
  list($r, $g, $b) = random_color(0, 127);
  $shadow = imagecolorallocate($image, $r + 127, $g + 127, $b + 127);
  $TTF_file = change_TTF();
  imagettftext($image, $size, $angle, $x + (int)($size / 15), $y, $shadow, $TTF_file, $text);
  imagettftext($image, $size, $angle, $x, $y - (int)($size / 15), $color, $TTF_file, $text);
  $x += (int)($size + ($minsize / 5));
}

$ip = $DB->escape($_SERVER['REMOTE_ADDR'], 1);

$DB->query("DELETE FROM {$CONF['sql_prefix']}_sessions WHERE data LIKE '{$ip}|%'", __FILE__, __LINE__);
$data = "{$ip}|" . sha1(')F*RJ@FHR^%X'.$string.'(*Ht3h7f9&^F'.$ip);

require_once("{$CONF['path']}/sources/misc/session.php");
$session = new session;
$session->create('captcha', $data);

header('Pragma: no-cache');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Content-type: image/jpeg');
imagejpeg($image);
imagedestroy($image);

// Select a new random font
function change_TTF() {
  global $TTF_RANGE, $TTF_folder;
  $key = array_rand($TTF_RANGE);
  $TTF_file = $TTF_folder.$TTF_RANGE[$key];

  return $TTF_file;
}

// Select a random color within a range
function random_color($min, $max) {
  $r = intval(mt_rand($min, $max));
  $g = intval(mt_rand($min, $max));
  $b = intval(mt_rand($min, $max));

  return array($r, $g, $b);
}
?>
