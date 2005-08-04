<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
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

function get_username($url) {
  global $CONF;

  $url = make_url($url);
  $count = 0;

  while (!$username) {
    list($username) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_members WHERE make_url = '{$url}'", __FILE__, __LINE__);

    if (!$username) {
      $url = make_url("{$url}.");
    }

    $count++;
    if ($count >= 10) {
      $username = 0;
      break;
    }
  }

  return $username;
}

function make_url($url) {
  // Get rid of www.
  $url = preg_replace('/\/\/www./', '//', $url);

  // Get rid of page after the trailing slash
  preg_match('/^(http:\/\/.+)\/(.+)/', $url, $matches);
  if (!$matches[0]) {
    // Just a domain with a slash at the end
    $url = preg_replace('/^(http:\/\/.+)\//', '\\1', $url);
  }
  else {
    // All other URLs
    // Check to see if after the trailing slash is a file or a directory
    if (strpos($matches[2], '.')) { $url = $matches[1]; }
  }

  return $url;
}
?>
