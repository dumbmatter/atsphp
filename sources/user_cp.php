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
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['user_cp_header'];

    if (!isset($_COOKIE['atsphp_sid_user_cp'])) {
      $this->login();
    }
    else {
      require_once("{$CONF['path']}/sources/misc/session.php");
      $session = new session;
      list($type, $data) = $session->get($_COOKIE['atsphp_sid_user_cp']);
      $TMPL['username'] = $DB->escape($data);

      if ($type == 'user_cp') {
        $session->update($_COOKIE['atsphp_sid_user_cp']);

        // Array containing the valid .php files from the sources/user_cp directory
        $action = array(
                    'edit' => 1,
                    'link_code' => 1
                  );

        if (isset($FORM['b']) && isset($action[$FORM['b']])) {
          $page_name = $FORM['b'];
          require_once("{$CONF['path']}/sources/user_cp/{$page_name}.php");
          $page = new $page_name;

          $TMPL['content'] = $this->do_skin('user_cp');
        }
        elseif (isset($FORM['b']) && $FORM['b'] == 'logout') {
          $this->logout();
        }
        else {
          $this->main();
        }
      }
      else {
        $this->login();
      }
    }
  }

  function login() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (!isset($FORM['u']) || !isset($FORM['password']) || !$FORM['u'] || !$FORM['password']) {
      $TMPL['content'] = $this->do_skin('user_cp_login');
    }
    else {
      $TMPL['username'] = $DB->escape($FORM['u']);
      $password = md5($FORM['password']);
      list($username) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}' AND password = '{$password}'", __FILE__, __LINE__);
      if ($TMPL['username'] == $username) {
        require_once("{$CONF['path']}/sources/misc/session.php");
        $session = new session;
        $session->create('user_cp', $TMPL['username']);

        $this->main();
      }
      else {
        $this->error($LNG['g_invalid_u_or_p']);
      }
    }
  }

  function logout() {
    global $CONF, $LNG, $TMPL;

    require_once("{$CONF['path']}/sources/misc/session.php");
    $session = new session;
    $session->delete($_COOKIE['atsphp_sid_user_cp']);

    $TMPL['content'] = $LNG['user_cp_logout_message'];
  }

  function main() {
    global $LNG, $TMPL;

    $TMPL['user_cp_content'] = $LNG['user_cp_welcome'];
    $TMPL['content'] = $this->do_skin('user_cp');
  }
}
?>
