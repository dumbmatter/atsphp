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

class edit_ban extends base {
  function edit_ban() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_edit_ban_header'];

    $id = intval($FORM['id']);
    list($TMPL['id']) = $DB->fetch("SELECT id FROM {$CONF['sql_prefix']}_ban WHERE id = {$id}", __FILE__, __LINE__);
    if ($TMPL['id']) {
      if (!isset($FORM['submit'])) {
        $this->form();
      }
      else {
        $this->process();
      }
    }
    else {
      $this->error($LNG['a_del_ban_invalid_id'], 'admin');
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    list($TMPL['string'], $TMPL['field'], $TMPL['matching']) = $DB->fetch("SELECT string, field, matching FROM {$CONF['sql_prefix']}_ban WHERE id = {$TMPL['id']}", __FILE__, __LINE__);

    if ($TMPL['matching']) {
      $matching_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_man_bad_words_exact']}</option>\n<option value=\"0\">{$LNG['a_man_bad_words_global']}</option>\n";
    }
    else {
      $matching_menu = "<option value=\"1\">{$LNG['a_man_bad_words_exact']}</option>\n<option value=\"0\" selected=\"selected\">{$LNG['a_man_bad_words_global']}</option>\n";
    }

    $fields = array('url', 'email', 'username', 'ip');
    $field_menu = '';
    foreach ($fields as $field) {
      $field_name = $LNG["g_{$field}"];

      if ($field == $TMPL['field']) {
        $field_menu .= "<option value=\"{$field}\" selected=\"selected\">{$field_name}</option>\n";
      }
      else {
        $field_menu .= "<option value=\"{$field}\">{$field_name}</option>\n";
      }
    }

    $TMPL['admin_content'] = <<<EndHTML
<form action="{$TMPL['list_url']}/index.php?a=admin&amp;b=edit_ban&amp;id={$TMPL['id']}" method="post">
<fieldset>
<legend>{$LNG['a_edit_ban_header']}</legend>
<label>{$LNG['a_man_ban_string']}<br />
<input type="text" name="string" size="20" value="{$TMPL['string']}" /><br /><br />
</label>
<label>{$LNG['a_man_ban_field']}<br />
<select name="field">
{$field_menu}</select><br /><br />
</label>
<label>{$LNG['a_man_bad_words_matching']}<br />
<select name="matching">
{$matching_menu}</select><br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['a_edit_ban_header']}" />
</fieldset>
</form>
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['string'] = $DB->escape($FORM['string']);
    $TMPL['field'] = $DB->escape($FORM['field']);
    $TMPL['matching'] = intval($FORM['matching']);

    $DB->query("UPDATE {$CONF['sql_prefix']}_ban SET string = '{$TMPL['string']}', field = '{$TMPL['field']}', matching = {$TMPL['matching']} WHERE id = {$TMPL['id']}", __FILE__, __LINE__);
 
    $TMPL['admin_content'] = $LNG['a_edit_ban_edited'];
  }
}
?>
