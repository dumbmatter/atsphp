<?php
//=================================================================\\
// Aardvark Topsites PHP 5.0                                       \\
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

class lost_code extends base {
  function lost_code() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['lostcode_header'];

    if (!isset($FORM['id'])) {
      $TMPL['content'] = $this->do_skin('lostcode_form');
    }
    else {
      $TMPL['id'] = $this->check_id($FORM['id']);
      $TMPL['content'] = $this->do_skin('lostcode_finish');
    }
  }
}
?>
