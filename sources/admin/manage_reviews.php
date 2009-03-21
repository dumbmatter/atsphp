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

class manage_reviews extends base {
  function manage_reviews() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_man_rev_header'];

    if (!isset($FORM['u']) || !$FORM['u']) {
      $this->form();
    }
    else {
      $username = $DB->escape($FORM['u']);;
      list($TMPL['username']) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username}'", __FILE__, __LINE__);

      if ($TMPL['username']) {
        $this->process();
      }
      else {
        $this->error($LNG['g_invalid_u'], 'admin');
      }
    }


  }

  function form() {
    global $LNG, $TMPL;

    $TMPL['admin_content'] = <<<EndHTML
{$LNG['a_man_rev_enter']}<br /><br />
<form action="{$TMPL['list_url']}/index.php" method="get">
<input type="hidden" name="a" value="admin" />
<input type="hidden" name="b" value="manage_reviews" />
<input type="text" name="u" size="20" />
<input type="submit" value="{$LNG['a_man_rev_header']}" />
</form><br />
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

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

<form action="index.php?a=admin&amp;b=delete_review" method="post" name="manage">
<table class="darkbg" cellpadding="1" cellspacing="1" width="100%">
<tr class="mediumbg">
<td></td>
<td align="center" width="1%">{$LNG['a_man_rev_id']}</td>
<td align="center" width="1%">{$LNG['a_man_rev_date']}</td>
<td width="100%">{$LNG['a_man_rev_rev']}</td>
<td align="center" colspan="2">{$LNG['a_man_actions']}</td>
</tr>
EndHTML;

    $alt = '';
    $num = 0;
    $result = $DB->query("SELECT id, date, review FROM {$CONF['sql_prefix']}_reviews WHERE active = 1 AND username = '{$TMPL['username']}' ORDER BY id ASC", __FILE__, __LINE__);
    while (list($id, $date, $review) = $DB->fetch_array($result)) {
      $TMPL['admin_content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td><input type="checkbox" name="id[]" value="{$id}" id="checkbox_{$num}" /></td>
<td align="center">{$id}</td>
<td align="center">{$date}</td>
<td width="100%">{$review}</td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=edit_review&amp;id={$id}">{$LNG['a_man_edit']}</a></td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=delete_review&amp;id={$id}">{$LNG['a_man_delete']}</a></td>
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
}
?>
