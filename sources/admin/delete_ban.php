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

class delete_ban extends base {
  function delete_ban() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (is_array($FORM['id']) && count($FORM['id']) > 1) {
      $TMPL['string'] = sprintf($LNG['a_del_ban_multi'], count($FORM['id']));
      $LNG['a_del_ban_header'] = $LNG['a_del_ban_headers'];
      $LNG['a_del_ban_done'] = $LNG['a_del_ban_dones'];
    }
    else {
      if (is_array($FORM['id']) && count($FORM['id']) == 1) {
        $TMPL['id'] = intval($FORM['id'][0]);
      }
      else {
        $TMPL['id'] = intval($FORM['id']);
      }
      list($TMPL['string']) = $DB->fetch("SELECT string FROM {$CONF['sql_prefix']}_ban WHERE id = {$TMPL['id']}", __FILE__, __LINE__);
    }
    $TMPL['header'] = $LNG['a_del_ban_header'];

    if ($TMPL['string']) {
      if (!isset($FORM['submit'])) {
        $this->warning();
      }
      else {
        $this->process();
      }
    }
    else {
      $this->error($LNG['a_del_ban_invalid_id'], 'admin');
    }
  }

  function warning() {
    global $FORM, $LNG, $TMPL;

    $ids = '';

    if (is_array($FORM['id']) && count($FORM['id']) > 1) {
      $del_warn = sprintf($LNG['a_del_ban_warn'], $TMPL['string']);

      foreach ($FORM['id'] as $id) {
        $ids .= "<input type=\"hidden\" name=\"id[]\" value=\"{$id}\" />\n";
      }
    }
    else {
      $del_warn = sprintf($LNG['a_del_ban_warn'], $TMPL['string']);

      $ids .= "<input type=\"hidden\" name=\"id[]\" value=\"{$TMPL['id']}\" />\n";
    }

    $TMPL['admin_content'] = <<<EndHTML
{$del_warn}<br /><br />
<form action="index.php?a=admin&amp;b=delete_ban" method="post">
{$ids}<input type="submit" name="submit" value="{$LNG['a_del_ban_header']}" />
</form>
EndHTML;
  }

  function process() {
    global $FORM, $LNG, $TMPL;

    if (is_array($FORM['id']) && count($FORM['id']) > 1) {
      foreach ($FORM['id'] as $id) {
        $this->do_delete($id);
      }
    }
    else {
      $this->do_delete($TMPL['id']);
    }

    $TMPL['admin_content'] = $LNG['a_del_ban_done'];
  }

  function do_delete($id) {
    global $CONF, $DB;

    $DB->query("DELETE FROM {$CONF['sql_prefix']}_ban WHERE id = {$id}", __FILE__, __LINE__);
  }
}
?>
