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

class approve_edited extends base {
  function approve_edited() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_approve_edited_header'];

    if (!isset($FORM['u'])) {
      $this->form();
    }
    elseif ($FORM['c'] == 'approve') {
      $this->approve();
    }
    elseif ($FORM['c'] == 'reject') {
      $this->reject();
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    $alt = '';
    $num = 0;
    $result = $DB->query("SELECT username, url, title FROM {$CONF['sql_prefix']}_sites_edited ORDER BY username ASC", __FILE__, __LINE__);
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

<form action="{$TMPL['list_url']}/index.php?a=admin&amp;b=approve_edited" method="post" name="approve">
<table class="darkbg" cellpadding="1" cellspacing="1" width="100%">
<tr class="mediumbg">
<td></td>
<td align="center" width="1%">{$LNG['g_username']}</td>
<td>{$LNG['a_approve_edited_old']}</td>
<td>${LNG['a_approve_edited_new']}</td>
<td align="center" colspan="2">{$LNG['a_man_actions']}</td>
</tr>
EndHTML;

      while (list($username, $url_new, $title_new) = $DB->fetch_array($result)) {
	$username_sql = $DB->escape($username);
        list($url, $title) = $DB->fetch("SELECT url, title FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username_sql}'", __FILE__, __LINE__);

        $TMPL['admin_content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td><input type="checkbox" name="u[]" value="{$username}" id="checkbox_{$num}" /></td>
<td align="center">$username</td>
<td><a href="{$url}">{$title}<br />{$url}</a></td>
<td><a href="{$url_new}">{$title_new}<br />{$url_new}</a></td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=approve_edited&amp;c=approve&amp;u={$username}">{$LNG['a_approve']}</a></td>
<td align="center"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=approve_edited&amp;c=reject&amp;u={$username}">{$LNG['a_approve_edited_reject']}</a></td>
</tr>
EndHTML;
        if ($alt) { $alt = ''; }
        else { $alt = 'alt'; }
        $num++;
      }

      $TMPL['admin_content'] .= <<<EndHTML
</table><br />
<a href="javascript:void;" onclick="check('approve', 'u[]', true)">{$LNG['a_man_all']}</a> | 
<a href="javascript:void;" onclick="check('approve', 'u[]', false)">{$LNG['a_man_none']}</a><br /><br />
{$LNG['a_approve_sel']}<br />
<select name="c">
<option value="approve">{$LNG['a_approve']}</option>
<option value="reject">{$LNG['a_approve_edited_reject']}</option>
</select>
<input type="submit" value="{$LNG['g_form_submit_short']}" />
</form>
EndHTML;
    }
    else {
      $TMPL['admin_content'] = $this->error($LNG['a_approve_edited_none'], 'admin');
    }
  }

  function approve() {
    global $DB, $FORM, $LNG, $TMPL;

    if (is_array($FORM['u']) && count($FORM['u']) > 1) {
      foreach ($FORM['u'] as $username) {
        $this->do_approve($DB->escape($username));
      }
    }
    else {
      if (is_array($FORM['u']) && count($FORM['u']) == 1) {
        $username = $DB->escape($FORM['u'][0]);
      }
      else {
        $username = $DB->escape($FORM['u']);
      }

      $this->do_approve($username);
    }

    $TMPL['admin_content'] = $LNG['a_approve_edited_done'];
  }

  function do_approve($username) {
    global $CONF, $DB, $LNG, $TMPL;

    list($url, $title) = $DB->fetch("SELECT url, title FROM {$CONF['sql_prefix']}_sites_edited WHERE username = '{$username}'", __FILE__, __LINE__);
    $url = $DB->escape($url);
    $title = $DB->escape($title);

    $DB->query("UPDATE {$CONF['sql_prefix']}_sites SET url = '{$url}', title = '{$title}' WHERE username = '{$username}'", __FILE__, __LINE__);
    $DB->query("DELETE FROM {$CONF['sql_prefix']}_sites_edited WHERE username = '{$username}'", __FILE__, __LINE__);
  }


  function reject() {
    global $DB, $FORM, $LNG, $TMPL;

    if (is_array($FORM['u']) && count($FORM['u']) > 1) {
      foreach ($FORM['u'] as $username) {
        $this->do_reject($username);
      }
    }
    else {
      if (is_array($FORM['u']) && count($FORM['u']) == 1) {
        $username = $DB->escape($FORM['u'][0]);
      }
      else {
        $username = $DB->escape($FORM['u']);
      }

      $this->do_reject($username);
    }

    $TMPL['admin_content'] = $LNG['a_approve_rejected_done'];
  }

  function do_reject($username) {
    global $CONF, $DB, $LNG, $TMPL;

    $DB->query("DELETE FROM {$CONF['sql_prefix']}_sites_edited WHERE username = '{$username}'", __FILE__, __LINE__);
  }
}
?>
