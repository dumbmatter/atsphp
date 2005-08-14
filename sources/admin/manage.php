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

class manage extends base {
  function manage() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_man_header'];

    $num_list = 20;

    if (isset($FORM['start'])) {
      $start = $DB->escape($FORM['start']);
    }
    else {
      $start = '';
    }

    $usernames_menu = '';
    $result = $DB->select_limit("SELECT username FROM {$CONF['sql_prefix']}_sites ORDER BY username ASC", 1, 0, __FILE__, __LINE__);
    list($username_start) = $DB->fetch_array($result);
    while ($username_start) {
      $result = $DB->select_limit("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username > '{$username_start}' ORDER BY username ASC", 2, $num_list - 2, __FILE__, __LINE__);
      list($username_end) = $DB->fetch_array($result);
      if (!$username_end) {
        $result = $DB->select_limit("SELECT username FROM {$CONF['sql_prefix']}_sites ORDER BY username DESC", 1, 0, __FILE__, __LINE__);
        list($username_end) = $DB->fetch_array($result);
      }

      if ($username_start == $start) { $usernames_menu .= "<option value=\"{$username_start}\" selected=\"selected\">{$username_start} - {$username_end}</option>"; }
      else { $usernames_menu .= "<option value=\"{$username_start}\">{$username_start} - {$username_end}</option>"; }

      list($username_start) = $DB->fetch_array($result);
    }

    list($num_members) = $DB->fetch('SELECT COUNT(*) FROM '.$CONF['sql_prefix'].'_sites WHERE active = 1', __FILE__, __LINE__);
    if ($num_members > $num_list) {
      $TMPL['admin_content'] = <<<EndHTML
<form action="index.php" method="get">
<input type="hidden" name="a" value="admin" />
<input type="hidden" name="b" value="manage" />
<select name="start">
{$usernames_menu}
</select>
<input type="submit" value="{$LNG['g_form_submit_short']}" />
</form><br />
EndHTML;
    }
    else {
      $TMPL['admin_content'] = '';
    }

    $TMPL['admin_content'] .= <<<EndHTML
<table class="darkbg" cellpadding="1" cellspacing="1" width="100%">
<tr class="mediumbg">
<td align="center" width="1%">{$LNG['g_username']}</td>
<td width="100%">{$LNG['table_title']}</td>
<td align="center" colspan="3">{$LNG['a_man_actions']}</td>
</tr>
EndHTML;

    $alt = '';
    $result = $DB->select_limit("SELECT username, title, url, email FROM {$CONF['sql_prefix']}_sites WHERE username >= '{$start}' ORDER BY username ASC", $num_list, 0, __FILE__, __LINE__);
    while (list($username, $title, $url, $email) = $DB->fetch_array($result)) {
      $TMPL['admin_content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td align="center" valign="top">{$username}</td>
<td valign="top" width="100%"><a href="$url" target="_blank">{$title}</a></td>
<td align="center" valign="top"><a href="index.php?a=admin&amp;b=delete&u={$username}">{$LNG['a_man_delete']}</a></td>
<td align="center" valign="top"><a href="index.php?a=admin&amp;b=edit&u={$username}">{$LNG['a_man_edit']}</a></td>
<td align="center" valign="top"><a href="mailto:{$email}">{$LNG['a_man_email']}</a></td>
</tr>
EndHTML;

      if ($alt) { $alt = ''; }
      else { $alt = 'alt'; }
    }

    $TMPL['admin_content'] .= '</table>';
  }
}
?>
