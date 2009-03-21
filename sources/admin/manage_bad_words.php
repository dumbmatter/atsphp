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

class manage_bad_words extends base {
  function manage_bad_words() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_man_bad_words_header'];

    if ((!isset($FORM['word']) && !isset($FORM['replacement']) && !isset($FORM['matching'])) || !$FORM['word']) {
      $this->main();
    }
    else {
      $this->ban_word();
    }
  }

  function main() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['admin_content'] = <<<EndHTML
{$LNG['a_man_bad_words_instructions']}<br /><br />
{$LNG['a_man_bad_words_instructions_matching']}<br /><br />
<form action="index.php" method="get">
<input type="hidden" name="a" value="admin" />
<input type="hidden" name="b" value="manage_bad_words" />
<table cellspacing="0" cellpadding="0">
<tr><td>
{$LNG['a_man_bad_words_word']}
<input type="text" name="word" size="15" />
</td><td>
{$LNG['a_man_bad_words_replacement']}
<input type="text" name="replacement" size="15" />
</td><td>
{$LNG['a_man_bad_words_matching']}
<select name="matching">
<option value="1">{$LNG['a_man_bad_words_exact']}</option>
<option value="0">{$LNG['a_man_bad_words_global']}</option>
</select>
</td><td>
<input type="submit" value="{$LNG['a_man_bad_words_filter']}" />
</td></tr>
</table>
</form><br />
EndHTML;

    $num_list = 20;

    if (isset($FORM['start'])) {
      $start = intval($FORM['start'] - 1);
    }
    else {
      $start = 0;
    }

    list($num_words) = $DB->fetch("SELECT COUNT(*) FROM {$CONF['sql_prefix']}_bad_words", __FILE__, __LINE__);
    if ($num_words > $num_list) {
      $num_words_original = $num_words;
      $ids_menu = '';
      $id_start = 1;
      $id_end = $num_list;

      while ($num_words > 0) {
        $num_words = $num_words - $num_list;
        if ($num_words <= 0) { $id_end = $num_words_original; }

        if ($id_start == ($start + 1)) { $ids_menu .= "<option value=\"{$id_start}\" selected=\"selected\">{$id_start} - {$id_end}</option>"; }
        else { $ids_menu .= "<option value=\"{$id_start}\">{$id_start} - {$id_end}</option>"; }

        $id_start = $id_start + $num_list;
        $id_end = $id_end + $num_list;
      }

      $TMPL['admin_content'] .= <<<EndHTML
<form action="index.php" method="get">
<input type="hidden" name="a" value="admin" />
<input type="hidden" name="b" value="manage_bad_words" />
<select name="start">
{$ids_menu}
</select>
<input type="submit" value="{$LNG['g_form_submit_short']}" />
</form><br />
EndHTML;
    }

    $TMPL['admin_content'] .= <<<EndHTML
<script language="javascript">
function check(form_name, field_name, value)
{
  var check_boxes = document.forms[form_name].elements[field_name];
  var num_check_boxes = check_boxes.length;

  if (!num_check_boxes)
  {
    check_boxes.checked = value;
  }
  else {
    for(var i = 0; i < num_check_boxes; i++)
    {
      check_boxes[i].checked = value;
    }
  }
}
</script>

<form action="{$TMPL['list_url']}/index.php?a=admin&amp;b=delete_bad_word" method="post" name="manage">
<table class="darkbg" cellpadding="1" cellspacing="1" width="100%">
<tr class="mediumbg">
<td></td>
<td width="100%">{$LNG['a_man_bad_words_word']}</td>
<td>{$LNG['a_man_bad_words_replacement']}</td>
<td>{$LNG['a_man_bad_words_matching']}</td>
<td align="center" colspan="2">{$LNG['a_man_actions']}</td>
</tr>
EndHTML;

    $alt = '';
    $num = 0;
    $result = $DB->select_limit("SELECT id, word, replacement, matching FROM {$CONF['sql_prefix']}_bad_words ORDER BY id ASC", $num_list, $start, __FILE__, __LINE__);
    while (list($id, $word, $replacement, $matching) = $DB->fetch_array($result)) {
      if ($matching) { 
        $matching = $LNG['a_man_bad_words_exact'];
      }
      else {
        $matching = $LNG['a_man_bad_words_global'];
      }

      $TMPL['admin_content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td><input type="checkbox" name="id[]" value="{$id}" id="checkbox_{$num}" /></td>
<td>{$word}</td>
<td>{$replacement}</td>
<td>{$matching}</td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=edit_bad_word&amp;id={$id}">{$LNG['a_man_edit']}</a></td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=delete_bad_word&amp;id={$id}">{$LNG['a_man_delete']}</a></td>
</tr>
EndHTML;

      if ($alt) { $alt = ''; }
      else { $alt = 'alt'; }
      $num++;
    }

    $TMPL['admin_content'] .= <<<EndHTML
</table><br />
<a href="javascript:void;" onclick="check('manage', 'id[]', true)">{$LNG['a_man_all']}</a> | 
<a href="javascript:void;" onclick="check('manage', 'id[]', false)">{$LNG['a_man_none']}</a><br /><br />
<input type="submit" value="{$LNG['a_man_del_sel']}" />
</form>
EndHTML;
  }

  function ban_word() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['word'] = $DB->escape($FORM['word']);
    $TMPL['replacement'] = $DB->escape($FORM['replacement']);
    $TMPL['matching'] = intval($FORM['matching']);

    list($id) = $DB->fetch("SELECT MAX(id) FROM {$CONF['sql_prefix']}_bad_words", __FILE__, __LINE__);
    $id++;

    $DB->query("INSERT INTO {$CONF['sql_prefix']}_bad_words (id, word, replacement, matching) VALUES ({$id}, '{$TMPL['word']}', '{$TMPL['replacement']}', {$TMPL['matching']})", __FILE__, __LINE__);
 
    $TMPL['admin_content'] = sprintf($LNG['a_man_bad_words_filtered'], $TMPL['word']);
  }
}
?>
