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

class edit_bad_word extends base {
  function edit_bad_word() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_edit_bad_word_header'];

    $id = intval($FORM['id']);
    list($TMPL['id']) = $DB->fetch("SELECT id FROM {$CONF['sql_prefix']}_bad_words WHERE id = {$id}", __FILE__, __LINE__);
    if ($TMPL['id']) {
      if (!isset($FORM['submit'])) {
        $this->form();
      }
      else {
        $this->process();
      }
    }
    else {
      $this->error($LNG['a_del_bad_word_invalid_id'], 'admin');
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    list($TMPL['word'], $TMPL['replacement'], $TMPL['matching']) = $DB->fetch("SELECT word, replacement, matching FROM {$CONF['sql_prefix']}_bad_words WHERE id = {$TMPL['id']}", __FILE__, __LINE__);

    if ($TMPL['matching']) {
      $matching_menu = "<option value=\"1\" selected=\"selected\">{$LNG['a_man_bad_words_exact']}</option>\n<option value=\"0\">{$LNG['a_man_bad_words_global']}</option>\n";
    }
    else {
      $matching_menu = "<option value=\"1\">{$LNG['a_man_bad_words_exact']}</option>\n<option value=\"0\" selected=\"selected\">{$LNG['a_man_bad_words_global']}</option>\n";
    }

    $TMPL['admin_content'] = <<<EndHTML
<form action="{$TMPL['list_url']}/index.php?a=admin&amp;b=edit_bad_word&amp;id={$TMPL['id']}" method="post">
<fieldset>
<legend>{$LNG['a_edit_bad_word_header']}</legend>
<label>{$LNG['a_man_bad_words_word']}<br />
<input type="text" name="word" size="20" value="{$TMPL['word']}" /><br /><br />
</label>
<label>{$LNG['a_man_bad_words_replacement']}<br />
<input type="text" name="replacement" size="20" value="{$TMPL['replacement']}" /><br /><br />
</label>
<label>{$LNG['a_man_bad_words_matching']}<br />
<select name="matching">
{$matching_menu}</select><br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['a_edit_bad_word_header']}" />
</fieldset>
</form>
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['word'] = $DB->escape($FORM['word']);
    $TMPL['replacement'] = $DB->escape($FORM['replacement']);
    $TMPL['matching'] = intval($FORM['matching']);

    $DB->query("UPDATE {$CONF['sql_prefix']}_bad_words SET word = '{$TMPL['word']}', replacement = '{$TMPL['replacement']}', matching = {$TMPL['matching']} WHERE id = {$TMPL['id']}", __FILE__, __LINE__);
 
    $TMPL['admin_content'] = $LNG['a_edit_bad_word_edited'];
  }
}
?>
