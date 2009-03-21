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

class delete extends base {
  function delete() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (isset($FORM['u'])) {
      if (is_array($FORM['u']) && count($FORM['u']) > 1) {
        $TMPL['title'] = sprintf($LNG['a_del_multi'], count($FORM['u']));
        $LNG['a_del_header'] = $LNG['a_del_headers'];
        $LNG['a_del_done'] = $LNG['a_del_dones'];
      }
      else {
        if (is_array($FORM['u']) && count($FORM['u']) == 1) {
          $TMPL['username'] = $DB->escape($FORM['u'][0]);
        }
        else {
          $TMPL['username'] = $DB->escape($FORM['u']);
        }
        list($TMPL['title']) = $DB->fetch("SELECT title FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
      }
      $TMPL['header'] = $LNG['a_del_header'];
    }

    if (isset($TMPL['title']) && $TMPL['title']) {
      if (!isset($FORM['submit'])) {
        $this->warning();
      }
      else {
        $this->process();
      }
    }
    else {
      $this->error($LNG['g_invalid_u'], 'admin');
    }
  }

  function warning() {
    global $FORM, $LNG, $TMPL;

    $del_warn = sprintf($LNG['a_del_warn'], $TMPL['title']);

    $usernames = '';

    if (is_array($FORM['u']) && count($FORM['u']) > 1) {
      foreach ($FORM['u'] as $username) {
        $usernames .= "<input type=\"hidden\" name=\"u[]\" value=\"{$username}\" />\n";
      }
    }
    else {
        $usernames .= "<input type=\"hidden\" name=\"u[]\" value=\"{$TMPL['username']}\" />\n";
    }

    $TMPL['admin_content'] = <<<EndHTML
{$del_warn}<br /><br />
<form action="{$TMPL['list_url']}/index.php?a=admin&amp;b=delete" method="post">
{$usernames}<input type="submit" name="submit" value="{$LNG['a_del_header']}" />
</form>
EndHTML;
  }

  function process() {
    global $FORM, $LNG, $TMPL;

    if (is_array($FORM['u']) && count($FORM['u']) > 1) {
      foreach ($FORM['u'] as $username) {
        $this->do_delete($username);
      }
    }
    else {
      $this->do_delete($TMPL['username']);
    }

    $TMPL['admin_content'] = $LNG['a_del_done'];
  }

  function do_delete($username) {
    global $CONF, $DB;

    $DB->query("DELETE FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username}'", __FILE__, __LINE__);
    $DB->query("DELETE FROM {$CONF['sql_prefix']}_stats WHERE username = '{$username}'", __FILE__, __LINE__);
    $DB->query("DELETE FROM {$CONF['sql_prefix']}_reviews WHERE username = '{$username}'", __FILE__, __LINE__);
  }
}
?>
