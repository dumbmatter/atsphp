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

class approve_reviews extends base {
  function approve_reviews() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_approve_rev_header'];

    if (!isset($FORM['id'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    $alt = '';
    $num = 0;
    $result = $DB->query("SELECT username, id, date, review FROM {$CONF['sql_prefix']}_reviews WHERE active = 0", __FILE__, __LINE__);
    if ($DB->num_rows($result)) {
      $TMPL['admin_content'] = <<<EndHTML
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

<form action="{$TMPL['list_url']}/index.php?a=admin" method="post" name="approve">
<table class="darkbg" cellpadding="1" cellspacing="1" width="100%">
<tr class="mediumbg">
<td></td>
<td align="center" width="1%">{$LNG['g_username']}</td>
<td align="center" width="1%">{$LNG['a_man_rev_id']}</td>
<td align="center" width="1%">{$LNG['a_man_rev_date']}</td>
<td width="100%">{$LNG['a_man_rev_rev']}</td>
<td align="center" colspan="2">{$LNG['a_man_actions']}</td>
</tr>
EndHTML;

      while (list($username, $id, $date, $review) = $DB->fetch_array($result)) {
        $TMPL['admin_content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td><input type="checkbox" name="id[]" value="{$id}" id="checkbox_{$num}" /></td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=stats&amp;u={$username}">{$username}</a></td>
<td align="center">{$id}</td>
<td align="center">{$date}</td>
<td width="100%">{$review}</td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=approve_reviews&amp;id={$id}">{$LNG['a_approve']}</a></td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=delete_review&amp;id={$id}">{$LNG['a_man_delete']}</a></td>
</tr>
EndHTML;

        if ($alt) { $alt = ''; }
        else { $alt = 'alt'; }
        $num++;
      }

      $TMPL['admin_content'] .= <<<EndHTML
</table><br />
<a href="javascript:void;" onclick="check('approve', 'id[]', true)">{$LNG['a_man_all']}</a> | 
<a href="javascript:void;" onclick="check('approve', 'id[]', false)">{$LNG['a_man_none']}</a><br /><br />
{$LNG['a_approve_sel']}<br />
<select name="b">
<option value="approve_reviews">{$LNG['a_approve']}</option>
<option value="delete_review">{$LNG['a_man_delete']}</option>
</select>
<input type="submit" value="{$LNG['g_form_submit_short']}" />
</form>
EndHTML;
    }
    else {
      $TMPL['admin_content'] = $this->error($LNG['a_approve_rev_none'], 'admin');
    }
  }

  function process() {
    global $DB, $FORM, $LNG, $TMPL;

    if (is_array($FORM['id']) && count($FORM['id']) > 1) {
      foreach ($FORM['id'] as $id) {
        $this->do_approve($id);
      }

      $LNG['a_approve_rev_done'] = $LNG['a_approve_rev_dones'];
    }
    else {
      if (is_array($FORM['id']) && count($FORM['id']) == 1) {
        $id = $DB->escape($FORM['id'][0]);
      }
      else {
        $id = $DB->escape($FORM['id']);
      }

      $this->do_approve($id);
    }

    $TMPL['admin_content'] = $LNG['a_approve_rev_done'];
  }

  function do_approve($id) {
    global $CONF, $DB;

    $DB->query("UPDATE {$CONF['sql_prefix']}_reviews SET active = 1 WHERE id = {$id}", __FILE__, __LINE__);
  }
}
?>
