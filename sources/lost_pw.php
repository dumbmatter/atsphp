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

class lost_pw extends base {
  function lost_pw() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['lost_pw_header'];

    if (!isset($FORM['submit']) && !isset($FORM['sid'])) {
      $TMPL['content'] = $this->do_skin('lost_pw_form');
    }
    elseif (isset($FORM['submit'])) {
      $this->email();
    }
    elseif (isset($FORM['sid']) && !isset($FORM['password'])) {

    }
    elseif (isset($FORM['sid']) && isset($FORM['password'])) {

    }
  }

  function email() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $username = $DB->escape($FORM['u']);
    list($email) = $DB->fetch("SELECT email FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username}'", __FILE__, __LINE__);
    if ($email) {
      require_once("{$CONF['path']}/sources/misc/session.php");
      $session = new session;
      $sid = $session->create('lost_pw', $username);
// send email
      $TMPL['content'] = $this->do_skin('lost_pw_finish');
    }
    else {
      $this->error($LNG['g_invalid_u']);
    }
  }
}
/*
if (!$FORM['set']) {
  $TMPL['content'] = do_template("lostpw_form");
}
elseif ($FORM['set'] && !$FORM['session_id']) {
  $result = $db->Execute("SELECT email FROM ".$CONFIG['sql_prefix']."_members WHERE id = ".$TMPL['id']);
  list($TMPL['email']) = $db->FetchArray($result);

  require_once $CONFIG['path'].'/sources/session.php';
  $session = new Session;
  $TMPL['session_id'] = $session->GetID(24);
  $session->SetType('lostpw');
  $session->SetData($TMPL['id']);
  $session->Create(1);

  $file = $CONFIG['skins_path']."/".$TMPL['skin_name']."/lostpw_mail.html";
  $fh_lostpw_mail = fopen($file, "r");
  $lostpw_mail = fread($fh_lostpw_mail, filesize($file)); 
  fclose($fh_lostpw_mail);

  $lostpw_mail_array = explode("\n", $lostpw_mail);

  $subject = array_shift($lostpw_mail_array);
  $subject = preg_replace("/Subject\: /", "", $subject );
  $lostpw_mail = implode("\n", $lostpw_mail_array);
  $subject = template_regex($subject);
  $lostpw_mail = template_regex($lostpw_mail);
  mail($TMPL['email'], $subject, $lostpw_mail, "From: ".$CONFIG['youremail']."\r\n");
  $TMPL['content'] = do_template("lostpw_finish");
}
elseif ($FORM['session_id'] && !$FORM['password']) {
  require_once $CONFIG['path'].'/sources/session.php';
  list($type, $TMPL['id']) = CheckSession($FORM['session_id']);

  if ($type == 'lostpw') {
    $TMPL['content'] = <<<EndHTML
<form action="index.php" method="post">
<input type="hidden" name="a" value="lostpw" />
<input type="hidden" name="set" value="1" />
<input type="hidden" name="session_id" value="${FORM['session_id']}" />
${LNG['lostpw_newpassword']}: 
<input type="password" name="password" />
<input type="submit" value="${LNG['g_form_submit_long']}" />
</form>
EndHTML;
  }
  else {
    $TMPL['content'] .= $LNG['lostpw_error'];
  }
}
elseif ($FORM['session_id'] && $FORM['password']) {
  $password = md5($FORM['password']);

  require_once $CONFIG['path'].'/sources/session.php';
  list($type, $TMPL['id']) = CheckSession($FORM['session_id']);
  KillSession($FORM['session_id']);

  if ($type == 'lostpw') {
    $db->Execute("UPDATE ".$CONFIG['sql_prefix']."_members SET password = '$password' WHERE id = ".$TMPL['id']);

    $TMPL['content'] .= $LNG['lostpw_finish'];
  }
  else {
    $TMPL['content'] .= $LNG['lostpw_error'];
  }
}*/
?>
