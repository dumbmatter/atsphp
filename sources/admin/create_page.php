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

class create_page extends base {
  function create_page() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_create_page_header'];

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
<form action="index.php?a=admin&amp;b=create_page" method="post">
<fieldset>
<legend>{$LNG['a_create_page_header']}</legend>
<label>{$LNG['a_create_page_id']}<br />
<input type="text" name="id" size="50" /><br /><br />
</label>
<label>{$LNG['g_title']}<br />
<input type="text" name="title" size="50" /><br /><br />
</label>
<label>{$LNG['a_edit_page_content']}<br />
<textarea style="width: 100%;" rows="10" name="content"></textarea><br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['a_create_page_header']}" />
</fieldset>
</form>
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['id'] = $DB->escape($FORM['id']);
    $TMPL['title'] = $DB->escape($FORM['title']);
    $TMPL['content'] = $DB->escape($FORM['content']);

    list($id_sql) = $DB->fetch("SELECT id FROM {$CONF['sql_prefix']}_custom_pages WHERE id = '{$TMPL['id']}'", __FILE__, __LINE__);
    if ($id_sql && $id_sql == $TMPL['id']) {
      $this->error($LNG['a_create_page_error_id_duplicate'], 'admin');
    }
    elseif (!preg_match('/^[a-zA-Z0-9\-_]+$/', $TMPL['id'])) {
      $this->error($LNG['a_create_page_error_id'], 'admin');
    }
    else {
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_custom_pages (id, title, content) VALUES ('{$TMPL['id']}', '{$TMPL['title']}', '{$TMPL['content']}')", __FILE__, __LINE__);
 
      $TMPL['admin_content'] = sprintf($LNG['a_create_page_created'], "<a href=\"{$TMPL['list_url']}/index.php?a=page&amp;id={$TMPL['id']}\">{$TMPL['list_url']}/index.php?a=page&amp;id={$TMPL['id']}</a>");
    }
  }
}
?>
