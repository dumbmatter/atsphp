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

class admin extends base {
  function admin() {
    global $CONF, $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_header'];

    if (!isset($_COOKIE['atsphp_sid_admin'])) {
      $this->login();
    }
    else {
      require_once("{$CONF['path']}/sources/misc/session.php");
      $session = new session;
      list($type, $TMPL['username']) = $session->get($_COOKIE['atsphp_sid_admin']);
      if ($type == 'admin') {
        $session->update($_COOKIE['atsphp_sid_admin']);

        // Array containing the valid .php files from the sources/admin directory
        $action = array(
                    'approve' => 1,
                    'delete' => 1,
                    'delete_review' => 1,
                    'edit' => 1,
                    'email' => 1,
                    'manage' => 1,
                    'settings' => 1,
                    'skins' => 1
                  );

        if (isset($FORM['b']) && isset($action[$FORM['b']])) {
          $page_name = $FORM['b'];
          require_once("{$CONF['path']}/sources/admin/{$page_name}.php");
          $page = new $page_name;

          $TMPL['content'] = $this->do_skin('admin');
        }
        elseif (isset($FORM['b']) && $FORM['b'] == 'logout') {
          $this->logout();
        }
        else {
          $this->main();
        }
      }
      else {
        $this->error($LNG['g_session_expired']);
      }
    }
  }

  function login() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (!isset($FORM['password']) || !$FORM['password']) {
      $TMPL['content'] = $this->do_skin('admin_login');
    }
    else {
      list($admin_password) = $DB->fetch("SELECT admin_password FROM {$CONF['sql_prefix']}_etc", __FILE__, __LINE__);
      if ($admin_password == md5($FORM['password'])) {
        require_once("{$CONF['path']}/sources/misc/session.php");
        $session = new session;
        $session->create('admin', 1);

        $this->main();
      }
      else {
        $this->error($LNG['g_invalid_p']);
      }
    }
  }

  function logout() {
    global $CONF, $LNG, $TMPL;

    require_once("{$CONF['path']}/sources/misc/session.php");
    $session = new session;
    $session->delete($_COOKIE['atsphp_sid_admin']);

    $TMPL['content'] = $LNG['a_logout_message'];
  }

  function main() {
    global $DB, $CONF, $LNG, $TMPL;

    $TMPL['admin_content'] = "{$LNG['a_main']}<br /><br />";

    list($num_waiting) = $DB->fetch("SELECT COUNT(*) FROM {$CONF['sql_prefix']}_sites WHERE active = 0", __FILE__, __LINE__);
    if ($num_waiting) {
      $TMPL['admin_content'] .= "<a href=\"{$TMPL['list_url']}/index.php?a=admin&amp;b=approve\">".sprintf($LNG['a_main_approve'], $num_waiting)."</a><br /><br />";
    }

    $phpversion = phpversion();
    if (version_compare($phpversion, '4.3.0', '>=')) {
      $latest_version = @file_get_contents('http://www.aardvarkind.com/topsitesphp/version.txt');
    }
    if (!$latest_version) {
      $latest_version = '?';
    }
    $TMPL['admin_content'] .= "{$LNG['a_version_your']}: {$TMPL['version']}<br />{$LNG['a_version_latest']}: {$latest_version}<br />\n{$LNG['a_version_new']}";


    $TMPL['content'] = $this->do_skin('admin');
  }
}
?>
