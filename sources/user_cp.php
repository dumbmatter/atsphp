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

require_once("{$CONF['path']}/sources/openid/consumer.php");

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
    global $FORM;
    if ($FORM['openid']) {
      $this->login_openid();
    }
    else {
      $this->login_standard();
    }
  }

  function login_openid() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;
    
    $consumer = new simple_consumer();
    $handler = new simple_action_handler($FORM, $consumer);

    if (isset($FORM['openid_url'])) {
      $identity_url = $FORM['openid_url'];
    }
    else {
      $identity_url = NULL;
    }

    if ($identity_url) {
      $ret = $consumer->find_identity_info($identity_url);
      if (!$ret) {
        $this->error(sprintf($LNG['user_cp_openid_error_server'], $identity_url));
      }
      else {
        list($identity_url, $server_id, $server_url) = $ret;

        $trust_root = "{$CONF['list_url']}/";
        $app_url = "{$CONF['list_url']}/index.php?a=user_cp&openid=1";
        $return_to = $handler->createReturnTo($app_url, $identity_url);
        $redirect_url = $consumer->handle_request($server_id, $server_url, $return_to, $trust_root);

        header("Location: {$redirect_url}");
        exit;
      }
    }
    elseif(isset($FORM['openid.mode']) || isset($FORM['openid_mode'])) {
      // php's url parsing converts '.' to '_'. So we check for both cases.

      // got a request from the server.  build a Request object and pass
      // it off to the consumer object.  OpendIDActionHandler handles
      // the various end cases (see above).
      $openid = $FORM['open_id'];
      $req = new ConsumerRequest($openid, $FORM, 'GET');
      $response = $consumer->handle_response($req);

      $response->doAction($handler);
    }
    else {
      $TMPL['content'] = $this->do_skin('user_cp_login');
    }
  }

  function login_standard() {
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

class simple_consumer extends OpenIDConsumer {
  function verify_return_to($return_to) {    
    $parts = parse_url($return_to);

    if (!isset($parts['port'])) {
      $parts['port'] = $parts['scheme'] == 'https' ? 443 : 80;
    }

    // you should verify return_to host:port string match host and  port of this server
    if ($parts['host'] != $_SERVER['SERVER_NAME'] || $parts['port'] != $_SERVER['SERVER_PORT']) {
      return false;
    }

    return true;
  }

}

class simple_action_handler extends ActionHandler {
  function simple_action_handler($query, $consumer) {
    $this->query = $query;
    $this->consumer = $consumer;
    $this->base = new base;
  }

  function doValidLogin($login) {
    global $CONF, $DB, $FORM, $TMPL;

    preg_match("/^.*\/\/(.+)\/$/", $this->query['open_id'], $matches);
    $openid = $matches[1];

    $TMPL['username'] = $DB->escape($openid);
    list($username) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$TMPL['username']}'", __FILE__, __LINE__);
    if ($TMPL['username'] == $username) {
      require_once("{$CONF['path']}/sources/misc/session.php");
      $session = new session;
      $session->create('user_cp', $TMPL['username']);

      header("Location: {$CONF['list_url']}/index.php?a=user_cp");
      exit;
    }
    else {
      $this->base->error($LNG['user_cp_openid_error_join']);
    }
  }

  function doInvalidLogin() {
    $this->base->error($LNG['user_cp_openid_error_general']);
  }

  function doUserCancelled() {
    $this->base->error($LNG['user_cp_openid_error_cancel']);
  }

  function doCheckAuthRequired($server_url, $return_to, $post_data) {
    global $FORM;

    // do openid.mode=check_authentication call, and then change state
    $response = $this->consumer->check_auth($server_url, $return_to, $post_data, $FORM['open_id']);
    $response->doAction($this);
  }

  function doErrorFromServer($message) {
    $this->base->error(sprintf($LNG['user_cp_openid_error_from_server'], $message));
  }

  function createReturnTo($base_url, $identity_url, $args = null) {
    if(!is_array($args)) {
      $args = array();
    }
    $args['open_id'] = $identity_url;
    return oidUtil::append_args($base_url, $args);
  }
}
?>
