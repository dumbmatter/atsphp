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

if (!defined('ATSPHP')) {
  die("This file cannot be accessed directly.");
}

class link_code extends base {
  function link_code() {
    global $CONF, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['link_code_header'];

    if ($CONF['google_friendly_links']) {
      $TMPL['verbose_link'] = "";
    }
    else {
      $TMPL['verbose_link'] = "index.php?a=in&u={$TMPL['username']}";
    }

    $TMPL['user_cp_content'] = $this->do_skin('link_code');
  }
}
?>
