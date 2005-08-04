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

class lost_code extends base {
  function lost_code() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['lost_code_header'];

    if (!isset($FORM['u'])) {
      $TMPL['content'] = $this->do_skin('lost_code_form');
    }
    else {
      $TMPL['username'] = $FORM['u'];
      $TMPL['content'] = $this->do_skin('lost_code_finish');
    }
  }
}
?>
