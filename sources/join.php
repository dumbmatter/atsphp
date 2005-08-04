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

    if (!isset($FORM['url'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $CONF, $FORM, $LNG, $TMPL;

    $TMPL['categories_menu'] = "<select name=\"category\">\n";
    foreach ($CONF['categories'] as $category) {
      $TMPL['categories_menu'] .= "<option value=\"{$category}\">{$category}\n";
    }
    $TMPL['categories_menu'] .= "</select>";

    $TMPL['content'] = $this->do_skin('join_form');
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['username'] = $DB->escape($FORM['u']);

    if ($this->check_input()) {
      $TMPL['url'] = $DB->escape($FORM['url']);
      $TMPL['title'] = $DB->escape($FORM['title']);
      $TMPL['description'] = $DB->escape($FORM['description']);
      $TMPL['category'] = $DB->escape($FORM['category']);
      $TMPL['banner_url'] = $DB->escape($FORM['banner_url']);
      $TMPL['email'] = $DB->escape($FORM['email']);
      $password = md5($FORM['password']);

      $join_date = date('Y-m-d');
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_sites (username, password, url, title, description, category, banner_url, email, join_date, active)
                  VALUES ('{$TMPL['username']}', '{$password}', '{$TMPL['url']}', '{$TMPL['title']}', '{$TMPL['description']}', '{$TMPL['category']}', '{$TMPL['banner_url']}', '{$TMPL['email']}', {$join_date}, {$CONF['active_default']})", __FILE__, __LINE__);
      $DB->query("INSERT INTO {$CONF['sql_prefix']}_stats (username) VALUES ('{$TMPL['username']}')", __FILE__, __LINE__);
 
      $join_email = new skin('join_email');
      $join_email->send_email($TMPL['email']);

      if ($CONF['email_admin_on_join']) {
        $join_email_admin = new skin('join_email_admin');
        $join_email_admin->send_email($CONF['your_email']);
      }

      $TMPL['content'] = $this->do_skin('join_finish');
    }
  }
}
?>
