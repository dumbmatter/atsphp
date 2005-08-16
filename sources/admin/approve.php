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

class approve extends base {
  function approve() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_approve_header'];

    if (!isset($FORM['u'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $CONF, $DB, $LNG, $TMPL;

    $alt = '';
    $result = $DB->query("SELECT username, url, title FROM {$CONF['sql_prefix']}_sites WHERE active = 0", __FILE__, __LINE__);
    if ($DB->num_rows($result)) {
      $TMPL['admin_content'] = <<<EndHTML
<table class="darkbg" cellpadding="1" cellspacing="1" width="100%">
<tr class="mediumbg">
<td align="center" width="1%">{$LNG['g_username']}</td>
<td width="100%">${LNG['table_title']}</td>
<td align="center" colspan="2">{$LNG['a_man_actions']}</td>
</tr>
EndHTML;

      while (list($username, $url, $title) = $DB->fetch_array($result)) {
        $TMPL['admin_content'] .= <<<EndHTML
<tr class="lightbg{$alt}">
<td align="center" valign="top">$username</td>
<td valign="top" width="100%"><a href="$url">$title</a></td>
<td align="center" valign="top"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=approve&amp;u={$username}">{$LNG['a_approve']}</a></td>
<td align="center" valign="top"><a href="{$TMPL['list_url']}/index.php?a=admin&amp;b=delete&amp;u={$username}">{$LNG['a_man_delete']}</a></td>
</tr>
EndHTML;
        if ($alt) { $alt = ''; }
        else { $alt = 'alt'; }
      }

      $TMPL['admin_content'] .= '</table>';
    }
    else {
      $TMPL['admin_content'] = $this->error($LNG['a_approve_none'], 'admin');
    }
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $username = $DB->escape($FORM['u']);

    $result = $DB->query("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE active = 0 AND username = '{$username}'", __FILE__, __LINE__);
    if ($DB->num_rows($result)) {
      $DB->query("UPDATE {$CONF['sql_prefix']}_sites SET active = 1 WHERE username = '{$username}'", __FILE__, __LINE__);
      $TMPL['admin_content'] = $LNG['a_approve_done'];
    }
    else {
      $this->error($LNG['g_invalid_u'], 'admin');
    }
  }
}
?>
