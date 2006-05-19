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

class join extends join_edit {
  function join() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['join_header'];

    if (!isset($FORM['submit'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $CONF, $FORM, $LNG, $TMPL;

    if ($CONF['captcha']) {
      $TMPL['join_captcha'] = $this->do_skin('join_captcha');
    }
    else {
      $TMPL['join_captcha'] = '';
    }

    $TMPL['categories_menu'] = "<select name=\"category\">\n";
    foreach ($CONF['categories'] as $cat => $skin) {
      if ($TMPL['category'] == $cat) {
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\" selected=\"selected\">{$cat}</option>\n";
      }
      else {
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\">{$cat}</option>\n";
      }
    }
    $TMPL['categories_menu'] .= "</select>";

    if (!$TMPL['openid']) {
      $TMPL['openid_options'] = <<<EndHTML
<option value="0" selected="selected">{$LNG['join_standard']}</option>
<option value="1">{$LNG['user_cp_openid']}</option>
EndHTML;
    }
    else {
      $TMPL['openid_options'] = <<<EndHTML
<option value="0">{$LNG['join_standard']}</option>
<option value="1" selected="selected">{$LNG['user_cp_openid']}</option>
EndHTML;
    }

    if (!isset($TMPL['url'])) { $TMPL['url'] = 'http://'; }
    if (!isset($TMPL['banner_url'])) { $TMPL['banner_url'] = 'http://'; }

    if (isset($TMPL['url'])) { $TMPL['url'] = stripslashes($TMPL['url']); }
    if (isset($TMPL['title'])) { $TMPL['title'] = stripslashes($TMPL['title']); }
    if (isset($TMPL['description'])) { $TMPL['description'] = stripslashes($TMPL['description']); }
    if (isset($TMPL['category'])) { $TMPL['category'] = stripslashes($TMPL['category']); }
    if (isset($TMPL['banner_url'])) { $TMPL['banner_url'] = stripslashes($TMPL['banner_url']); }
    if (isset($TMPL['email'])) { $TMPL['email'] = stripslashes($TMPL['email']); }

    $TMPL['content'] = $this->do_skin('join_form');
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['openid'] = intval($FORM['openid']);
    if ($TMPL['openid']) {
      $TMPL['username'] = $DB->escape($FORM['openid_url'], 1);
    }
    else {
      $TMPL['username'] = $DB->escape($FORM['u'], 1);
    }
    $TMPL['url'] = $DB->escape($FORM['url'], 1);
    $TMPL['title'] = $DB->escape($FORM['title'], 1);
    $FORM['description'] = str_replace(array("\r\n", "\n", "\r"), ' ', $FORM['description']);
    $TMPL['description'] = $DB->escape($FORM['description'], 1);
    $TMPL['category'] = $DB->escape($FORM['category'], 1);
    $TMPL['banner_url'] = $DB->escape($FORM['banner_url'], 1);
    $TMPL['email'] = $DB->escape($FORM['email'], 1);

    if ($this->check_input('join')) {
      $password = md5($FORM['password']);

      require_once("{$CONF['path']}/sources/in.php");
      $short_url = in::short_url($TMPL['url']);

      $join_date = date('Y-m-d', time() + (3600*$CONF['time_offset']));

      $DB->query("INSERT INTO {$CONF['sql_prefix']}_sites (username, password, url, short_url, title, description, category, banner_url, email, join_date, active, openid)
                  VALUES ('{$TMPL['username']}', '{$password}', '{$TMPL['url']}', '{$short_url}', '{$TMPL['title']}', '{$TMPL['description']}', '{$TMPL['category']}', '{$TMPL['banner_url']}', '{$TMPL['email']}', '{$join_date}', {$CONF['active_default']}, {$TMPL['openid']})", __FILE__, __LINE__);
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_stats (username) VALUES ('{$TMPL['username']}')", __FILE__, __LINE__);

      $TMPL['link_code'] = $this->do_skin('link_code');

      $LNG['join_welcome'] = sprintf($LNG['join_welcome'], $TMPL['list_name']);

      $join_email = new skin('join_email');
      $join_email->send_email($TMPL['email']);

      if ($CONF['email_admin_on_join']) {
        $join_email_admin = new skin('join_email_admin');
        $join_email_admin->send_email($CONF['your_email']);
      }

      $TMPL['content'] = $this->do_skin('join_finish');
    }
    else {
      $this->form();
    }
  }
}
?>
