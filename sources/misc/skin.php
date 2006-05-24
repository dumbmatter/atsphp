<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
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

class skin {
  var $filename;

  function skin($filename) {
    $this->filename = $filename;
  }

  function make() {
    global $CONF, $TMPL;

    $file = "{$CONF['skins_path']}/{$TMPL['skin_name']}/{$this->filename}.html";
    $fh_skin = fopen($file, 'r');
    $skin = @fread($fh_skin, filesize($file));
    fclose($fh_skin);

    $parse = 1;

    if ($this->filename == 'wrapper') {
      $powered_by_check = strpos($skin, '{$powered_by}') ? 1 : 0;
  
      if ($powered_by_check) {
        $return = $skin;
      }
      else {
        $return = 'You cannot delete {$powered_by} from wrapper.html.';
        $parse = 0;
      }
    }
    elseif ($this->filename == 'admin' || $this->filename == 'ssi_top' || $this->filename == 'ssi_members') {
      $return = $skin;
    }
    else {
      $return = "<!-- Begin {$this->filename}.html -->\n{$skin}<!-- End {$this->filename}.html -->\n\n";
    }

    if ($parse) {
      return $this->parse($return);
    }
    else {
      return $return;
    }
  }

  function send_email($email) {
    global $CONF, $TMPL;

    $file = "{$CONF['skins_path']}/{$TMPL['skin_name']}/{$this->filename}.html";
    $fh_skin = fopen($file, "r");
    $skin = @fread($fh_skin, filesize($file));
    fclose($fh_skin);

    $skin_array = explode("\n", $skin);

    $subject = array_shift($skin_array);
    $subject = str_replace('Subject: ', '', $subject);
    $body = implode("\n", $skin_array);

    $subject = $this->parse($subject);
    $body = $this->parse($body);

    mail($email, $subject, $body, "From: {$CONF['your_email']}\r\n");
  }
  
  function parse($skin) {
    global $LNG, $TMPL, $n, $parse_time;

    $skin = preg_replace_callback('/{\$lng->(.+?)}/i', create_function('$matches', 'global $LNG; return $LNG[$matches[1]];'), $skin);
    $skin = preg_replace_callback('/{include \"(.+?)\"}/i', create_function('$matches', 'return file_get_contents($matches[1]);'), $skin);
    $skin = preg_replace_callback('/{\$(.+?)}/i', create_function('$matches', 'global $TMPL; return $TMPL[$matches[1]];'), $skin);

    return $skin;
  }

  function callback($matches) {
    return $matches[1];
  }
}

class main_skin extends skin {
  function main_skin($filename) {
    global $CONF, $DB, $FORM, $LNG, $TIMER, $TMPL;

    $this->filename = $filename;

    // Number of members
    list($TMPL['num_members']) = $DB->fetch('SELECT COUNT(*) FROM '.$CONF['sql_prefix'].'_sites WHERE active = 1', __FILE__, __LINE__);

    // Build the multiple pages menu
    if ($TMPL['num_members'] > $CONF['num_list']) {
      $num = $TMPL['num_members'];
      $done = 0;
      $TMPL['multiple_pages_menu'] = "<select name=\"start\">\n";
      while ($num > 0) {
        $start = $done * $CONF['num_list'] + 1;
        $end = ($done + 1) * $CONF['num_list'];
        $FORM['start'] = isset($FORM['start']) ? $FORM['start'] : 1;
  
        if ($FORM['start'] == $start) {
          $TMPL['multiple_pages_menu'] .= "<option value=\"{$start}\" selected=\"selected\">{$start} - {$end}</option>\n";
        }
        else {
          $TMPL['multiple_pages_menu'] .= "<option value=\"{$start}\">{$start} - {$end}</option>\n";
        }
  
        $num = $num - $CONF['num_list'];
        $done++;
      }
      $TMPL['multiple_pages_menu'] .= '</select>';
    }
    else { $TMPL['multiple_pages_menu'] = ''; }
  
    // Build the ranking method menu
    $ranking_method = isset($FORM['method']) ? $FORM['method'] : $CONF['ranking_method'];
    $TMPL['ranking_methods_menu'] = '<select name="method">'."\n";
    if ($ranking_method == 'pv') { $TMPL['ranking_methods_menu'] .= '<option value="pv" selected="selected">'.$LNG['g_pv']."</option>\n"; }
    else { $TMPL['ranking_methods_menu'] .= '<option value="pv">'.$LNG['g_pv']."\n"; }
    if ($ranking_method == 'in') { $TMPL['ranking_methods_menu'] .= '<option value="in" selected="selected">'.$LNG['g_in']."</option>\n"; }
    else { $TMPL['ranking_methods_menu'] .= '<option value="in">'.$LNG['g_in']."\n"; }
    if ($ranking_method == 'out') { $TMPL['ranking_methods_menu'] .= '<option value="out" selected="selected">'.$LNG['g_out']."</option>\n"; }
    else { $TMPL['ranking_methods_menu'] .= '<option value="out">'.$LNG['g_out']."\n"; }
    $TMPL['ranking_methods_menu'] .= '</select>';
  
    // Build the categories menu and feed.php link
    $TMPL['feed'] = 'feed.php';
    $current_cat = isset($FORM['cat']) ? $FORM['cat'] : $LNG['main_all'];
    $TMPL['categories_menu'] = "<select name=\"cat\">\n";
    if ($current_cat == $LNG['main_all']) {
      $TMPL['categories_menu'] .= "<option value=\"\" selected=\"selected\">{$LNG['main_all']}</option>\n";
    }
    else {
      $TMPL['categories_menu'] .= "<option value=\"\">{$LNG['main_all']}\n";
    }
    foreach ($CONF['categories'] as $cat => $skin) {
      if ($current_cat == $cat) {
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\" selected=\"selected\">{$cat}</option>\n";
        $TMPL['feed'] .= "?cat={$cat}";
      }
      else {
        $TMPL['categories_menu'] .= "<option value=\"{$cat}\">{$cat}</option>\n";
      }
    }
    $TMPL['categories_menu'] .= '</select>';

    // Featured member
    if ($CONF['featured_member'] && $TMPL['num_members']) {
      $result = $DB->select_limit("SELECT username, url, title, description, banner_url FROM {$CONF['sql_prefix']}_sites WHERE active = 1 ORDER BY RAND()", 1, 0, __FILE__, __LINE__);
      $row = $DB->fetch_array($result);
      $TMPL = array_merge($TMPL, $row);

      $TMPL['featured_member'] = base::do_skin('featured_member');
    }

    $TMPL['query'] = isset($TMPL['query']) ? $TMPL['query'] : '';

    // Please do not remove the link to http://www.aardvarktopsitesphp.com/.
    // This is a free script, all I ask for is a link back.
    $TMPL['powered_by'] = $LNG['main_powered'].' <a href="http://www.aardvarktopsitesphp.com/"><b>Aardvark Topsites PHP</b></a> '.$TMPL['version'];

    // If you want to remove these links, you can; however, I would appreciate
    // it if you left them there.
    $TMPL['powered_by'] .= '<br /><a href="http://www.avatic.com/">Avatic</a>  | <a href="http://www.itopsites.com/" title="Get a free hosted topsites list">iTopsites</a>  | <a href="http://www.pollverize.com/" title="Get a free remotely hosted poll">Pollverize</a> | <a href="http://www.consolidatestudentloansnow.org/" title="Consolidate student loans now">Student Loan Consolidation</a>';

    $TMPL['num_queries'] = $DB->num_queries;
    $TMPL['execution_time'] = $TIMER->get_time();
  }
}
?>
