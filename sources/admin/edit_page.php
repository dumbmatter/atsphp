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

class edit_page extends base {
  function edit_page() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_edit_page_header'];

    $id = $DB->escape($FORM['id']);
    list($TMPL['id']) = $DB->fetch("SELECT id FROM {$CONF['sql_prefix']}_custom_pages WHERE id = '{$id}'", __FILE__, __LINE__);
    if ($TMPL['id']) {
      if (!isset($FORM['submit'])) {
        $this->form();
      }
      else {
        $this->process();
      }
    }
    else {
      $this->error($LNG['a_del_page_invalid_id'], 'admin');
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    list($TMPL['title'], $TMPL['content']) = $DB->fetch("SELECT title, content FROM {$CONF['sql_prefix']}_custom_pages WHERE id = '{$TMPL['id']}'", __FILE__, __LINE__);

    $TMPL['admin_content'] = <<<EndHTML
<form action="{$TMPL['list_url']}/index.php?a=admin&amp;b=edit_page&amp;id={$TMPL['id']}" method="post">
<fieldset>
<legend>{$LNG['a_edit_page_header']}</legend>
<label>{$LNG['g_title']}<br />
<input type="text" name="title" size="50" value="{$TMPL['title']}" /><br /><br />
</label>
<label>{$LNG['a_edit_page_content']}<br />
<textarea style="width: 100%;" rows="10" name="content">{$TMPL['content']}</textarea><br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['a_edit_page_header']}" />
</fieldset>
</form>
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['title'] = $DB->escape($FORM['title']);
    $TMPL['content'] = $DB->escape($FORM['content']);

    $DB->query("UPDATE {$CONF['sql_prefix']}_custom_pages SET title = '{$TMPL['title']}', content = '{$TMPL['content']}' WHERE id = '{$TMPL['id']}'", __FILE__, __LINE__);
 
    $TMPL['admin_content'] = $LNG['a_edit_page_edited'];
  }
}
?>
