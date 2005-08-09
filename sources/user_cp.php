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

class user_cp extends base {
  function user_cp() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['user_cp_header'];

    if (!isset($FORM['sid'])) {
      $this->login();
    }
    else {
      $this->main();
    }
  }

  function login() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (!isset($FORM['u']) || !isset($FORM['password']) || !$FORM['u'] || !$FORM['password']) {
      $TMPL['content'] = $this->do_skin('user_cp_login');
    }
    else {
      $username = $DB->escape($FORM['u']);
      $password = md5($FORM['password']);

      list($username_sql) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username}' AND password = '{$password}'", __FILE__, __LINE__);
      if ($username == $username_sql) {
        require_once("{$CONF['path']}/sources/misc/session.php");
        $session = new session;
        $FORM['sid'] = $session->create('user_cp', $username);

        $this->main();
      }
      else {
        $TMPL['content'] = $LNG['g_invalid_u_or_p'];
      }
    }
  }

  function main() {
    global $CONF, $DB, $FORM, $TMPL;

    require_once("{$CONF['path']}/sources/misc/session.php");
    $session = new session;
    list($type, $username) = $session->get($FORM['sid']);

    if ($type == 'user_cp') {
      $TMPL['content'] = "whatup";
    }
    else {
      $TMPL['content'] = $LNG['g_session_expired'];
    }
  }
}
?>
