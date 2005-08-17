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

class delete_review extends base {
  function delete_review() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_del_rev_header'];

    if (!isset($FORM['submit'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $LNG, $TMPL;

    $TMPL['admin_content'] = <<<EndHTML
<form action="index.php?a=admin&amp;b=delete_review" method="post">
<fieldset>
<legend>{$LNG['a_del_rev_header']}</legend>
<label>{$LNG['a_del_rev_id']}<br />
<input type="text" name="id" size="5" /><br /><br />
</label>
<input type="submit" name="submit" value="{$LNG['a_del_rev_header']}" />
</fieldset>
</form>
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $id = intval($FORM['id']);
    list($id_sql) = $DB->fetch("SELECT id FROM {$CONF['sql_prefix']}_reviews WHERE id = {$id}", __FILE__, __LINE__);
    if ($id && $id == $id_sql) {
      $DB->query("DELETE FROM {$CONF['sql_prefix']}_reviews WHERE id = {$id}", __FILE__, __LINE__);

      $TMPL['admin_content'] = $LNG['a_del_rev_done'];
    }
    else {
      $this->error($LNG['a_del_rev_invalid_id'], 'admin');
    }
  }
}
?>
