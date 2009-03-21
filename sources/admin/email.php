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

class email extends base {
  function email() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_email_header'];

    if (!isset($FORM['submit'])) {
      $this->form();
    }
    else {
      $this->process();
    }
  }

  function form() {
    global $LNG, $TMPL;

    $TMPL['admin_content'] = <<<EndHTML
<form action="index.php?a=admin&amp;b=email" method="post">
<fieldset>
<legend>{$LNG['a_email_header']}</legend>
<label>{$LNG['a_email_subject']}<br />
<input type="text" name="subject" size="50" /><br /><br />
</label>
<label>{$LNG['a_email_message']}<br />
<textarea cols="40" rows="15" name="message"></textarea><br /><br />
</label>
<input name="submit" type="submit" value="{$LNG['a_email_header']}" />
</form>
EndHTML;
  }

  function process() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (get_magic_quotes_gpc()) {
      $message = stripslashes($FORM['message']);
      $subject = stripslashes($FORM['subject']);
    }
    else {
      $message = $FORM['message'];
      $subject = $FORM['subject'];
    }

    $TMPL['admin_content'] = '';
    $failed = 0;
    $count = 0;
    $result = $DB->query("SELECT email FROM {$CONF['sql_prefix']}_sites", __FILE__, __LINE__);
    while (list($email) = $DB->fetch_array($result)) {
      if(!@mail($email, $subject, $message, "From: {$TMPL['list_name']} <{$CONF['your_email']}>")) {
        $TMPL['admin_content'] .= sprintf($LNG['a_email_not_sent'], $email).".<br />\n";
        $failed++;
      }
      else {
        $TMPL['admin_content'] .= sprintf($LNG['a_email_msg_sent'], $email).".<br />\n";
        $count++;
      }
    }

    $TMPL['admin_content'] .= "<br />\n".sprintf($LNG['a_email_sent'], $count);
    if ($failed) {
      $TMPL['admin_content'] .= "<br />\n".sprintf($LNG['a_email_failed'], $failed);
    }
  }
}
?>
