<?php
//=================================================================\\
// Aardvark Topsites PHP 5.0                                       \\
//-----------------------------------------------------------------\\
// Copyright 2003-2004 Jeremy Scheff - http://www.aardvarkind.com/ \\
//-----------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or   \\
// modify it under the terms of the GNU General Public License     \\
// as published by the Free Software Foundation; either version 2  \\
// of the License, or (at your option) any later version.          \\
//                                                                 \\
// This program is distributed in the hope that it will be useful, \\
// but WITHOUT ANY WARRANTY; without even the implied warranty of  \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   \\
// GNU General Public License for more details.                    \\
//=================================================================\\

class skin {
  function make($filename) {
    global $CONF, $TMPL;

    $file = $CONF['skins_path'].'/'.$TMPL['skin_name'].'/'.$filename.'.html';
    $fh_skin = fopen($file, 'r');
    $skin = @fread($fh_skin, filesize($file)); 
    fclose($fh_skin);
  
    if ($filename == 'wrapper') {
      if (preg_match('/<#poweredby>/', $skin)) {
        $copythere = 1;
      }
  
      if ($copythere) {
        $return = $skin;
      }
      else {
        $return = 'You cannot delete the &lt;#poweredby&gt; tag from wrapper.html.';
      }
    }
    elseif ($filename == 'admin' || $filename == 'ssi_top' || $filename == 'ssi_members') {
      $return = $skin;
    }
    else {
      $return = '<!-- Begin $filename.html -->\n' . $skin . '\n<!-- End $filename.html -->\n\n';
    }

    return $this->parse($return);
  }
  
  function parse($skin) {
    global $LNG, $TMPL;

    $skin = preg_replace('/<#lng\{\'(.+?)\'\}>/ei', '\$LNG['\\1']', $skin);
    $skin = preg_replace('/<#include=\"(.+?)\">/ei', 'file_get_contents('\\1')', $skin);
    $skin = preg_replace('/<#(.+?)>/ei', '\$TMPL['\\1']', $skin);
    return $skin;
  }
}

class main_skin extends skin {
  function __construct() {
    global $CONF, $DB, $FORM, $LNG, $TMPL, $starttime;

    // Number of members
    $result = $DB->execute('SELECT COUNT(*) FROM '.$CONF['sql_prefix'].'_members WHERE active = 1');
    list($TMPL['num_members']) = $DB->fetch_array($result);
  
    // Build the multiple pages menu
    if ($TMPL['num_members'] > $CONF['num_list']) {
      $num = $TMPL['num_members'];
      $done = 0;
      $TMPL['multiple_pages_form'] = "<select name=\"start\">\n";
      while ($num > 0) {
        $start = $done * $CONF['num_list'] + 1;
        $end = ($done + 1) * $CONF['num_list'];
        $FORM['start'] = isset($FORM['start']) ? $FORM['start'] : 1;
  
        if ($FORM['start'] == $start) {
          $TMPL['multiple_pages_form'] .= "<option value=\"{$start}\" selected=\"selected\">{$start} - {$end}\n";
        }
        else {
          $TMPL['multiple_pages_form'] .= "<option value=\"{$start}\">{$start} - {$end}\n";
        }
  
        $num = $num - $CONF['num_list'];
        $done++;
      }
      $TMPL['multiple_pages_form'] .= '</select>';
    }
  
    // Build the ranking method menu
    $ranking_method = isset($FORM['method']) ? $FORM['method'] : $CONF['ranking_method'];
    $TMPL['ranking_method'] = $LNG['g_'.$ranking_method];
    $TMPL['ranking_method_form'] = "<select name=\"method\">\n";
    if ($ranking_method == 'unq_pv') { $TMPL['ranking_method_form'] .= "<option value=\"unq_pv\" selected=\"selected\">{$LNG['g_unq_pv']}\n"; }
    else { $TMPL['ranking_method_form'] .= "<option value=\"unq_pv\">{$LNG['g_unq_pv']}\n"; }
    if ($ranking_method == 'tot_pv') { $TMPL['ranking_method_form'] .= "<option value=\"tot_pv\" selected=\"selected\">{$LNG['g_tot_pv']}\n"; }
    else { $TMPL['ranking_method_form'] .= "<option value=\"tot_pv\">{$LNG['g_tot_pv']}\n"; }
    if ($ranking_method == 'unq_in') { $TMPL['ranking_method_form'] .= "<option value=\"unq_in\" selected=\"selected\">{$LNG['g_unq_in']}\n"; }
    else { $TMPL['ranking_method_form'] .= "<option value=\"unq_in\">{$LNG['g_unq_in']}\n"; }
    if ($ranking_method == 'tot_in') { $TMPL['ranking_method_form'] .= "<option value=\"tot_in\" selected=\"selected\">{$LNG['g_tot_in']}\n"; }
    else { $TMPL['ranking_method_form'] .= "<option value=\"tot_in\">{$LNG['g_tot_in']}\n"; }
    if ($ranking_method == 'unq_out') { $TMPL['ranking_method_form'] .= "<option value=\"unq_out\" selected=\"selected\">{$LNG['g_unq_out']}\n"; }
    else { $TMPL['ranking_method_form'] .= "<option value=\"unq_out\">{$LNG['g_unq_out']}\n"; }
    if ($ranking_method == 'tot_out') { $TMPL['ranking_method_form'] .= "<option value=\"tot_out\" selected=\"selected\">{$LNG['g_tot_out']}\n"; }
    else { $TMPL['ranking_method_form'] .= "<option value=\"tot_out\">{$LNG['g_tot_out']}\n"; }
    $TMPL['ranking_method_form'] .= '</select>';
  
    // Build the categories menu
    $current_cat = isset($FORM['cat']) ? $FORM['cat'] : $LNG['main_all'];
    $TMPL['cat_form'] = "<select name=\"cat\">\n";
    if ($current_cat == $LNG['main_all']) { $TMPL['cat_form'] .= "<option value=\"\" selected=\"selected\">${LNG['main_all']}\n"; }
    else { $TMPL['cat_form'] .= "<option value=\"\">${LNG['main_all']}\n"; }
    foreach ($CONF['categories'] as $cat => $skin) {
      if ($current_cat == $cat) { $TMPL['cat_form'] .= "<option value=\"{$cat}\" selected=\"selected\">{$cat}\n"; }
      else { $TMPL['cat_form'] .= "<option value=\"{$cat}\">{$cat}\n"; }
    }
    $TMPL['catform'] .= '</select>';
  
    // Featured member
    if ($CONF['featured_member'] && $TMPL['num_members']) {
      unset($TMPL['id']);
      while (!$TMPL['id']) {
        if ($TMPL['num_members']) {
          $limit = rand(0, ($TMPL['num_members'] - 1));
        }
        else { $limit = 0; }
        $result = $DB->SelectLimit('SELECT id, url, title, description, banner_url FROM '.$CONF['sql_prefix'].'_members WHERE active = 1', 1, $limit);
        list($TMPL['id'], $TMPL['real_url'], $TMPL['title'], $TMPL['description'], $TMPL['banner_url']) = $DB->FetchArray($result);
      }
      $TMPL['url'] = $CONF['list_url'].'/out.php?id='.$TMPL['id'];
      $TMPL['featured_member'] = do_template('featured_member');
    }
  
    // Please do not remove the link to http://www.aardvarkind.com/.
    // This is a free script, all I ask for is a link back.
    // If you need to remove the link, see my website for details.
    $TMPL['poweredby'] = $LNG['main_powered'].' <a href="http://www.aardvarkind.com/" target="_blank">Aardvark Topsites PHP</a> '.$TMPL['version'];
  }
}
?>
