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

class skins extends base {
  function skins() {
    global $FORM, $LNG, $TMPL;

    $TMPL['header'] = $LNG['a_skins_header'];

    if (!isset($FORM['submit']) && !isset($FORM['submit_categories']) && !isset($FORM['c'])) {
      $this->form();
    }
    elseif (isset($FORM['default_skin'])) {
      $this->process_default();
    }
    elseif (isset($FORM['submit_categories'])) {
      $this->process_categories();
    }
    elseif (isset($FORM['cat']) && !isset($FORM['c'])) {
      $this->process_new_category();
    }
    elseif (isset($FORM['c']) && $FORM['c'] == 'delete') {
      $this->delete_category();
    }
    elseif (isset($FORM['c']) && $FORM['c'] == 'edit') {
      $this->edit_category();
    }
  }

  function form() {
    global $CONF, $LNG, $TMPL;

    $default_skin_menu = '';
    $dir = opendir("{$CONF['path']}/skins/");
    while (false !== ($subdir = readdir($dir))) {
      if ($subdir != '.' && $subdir != '..' && file_exists("{$CONF['path']}/skins/{$subdir}/info.php")) {
        unset($name, $author, $email, $url);

        include "{$CONF['path']}/skins/{$subdir}/info.php";

        if ($CONF['default_skin'] == $subdir) {
          $checked = ' checked="checked"';
        }
        else {
          $checked = '';
        }

        if (!isset($author) || !$author) {
          $author = $LNG['a_skins_anon'];
        }
        if (isset($email) && $email) {
          $author_link = "<a href=\"mailto:{$email}\">{$author}</a>";
        }
        else {
          $author_link = $author;
        }
        if (isset($url) && $url) {
          $url_link = "<br /><a href=\"{$url}\">{$url}</a>";
        }
        else {
          $url_link = '';
        }

        $default_skin_menu .= <<<EndHTML
<label>
<table cellpadding="0" cellspacing="0"><tr><td width="20px"><input type="radio" name="default_skin" value="{$subdir}"{$checked} />
</td><td>{$name}<br />
by {$author_link}{$url_link}</td></tr></table><br />
</label>
EndHTML;
      }
    }

    $categories_menu = '<table cellspacing="0" cellpadding="0" width="100%">';
    foreach ($CONF['categories'] as $cat => $skin) {
      $skins_menu = $this->skins_menu($skin);
      $cat_url = urlencode($cat);

      $categories_menu .= <<<EndHTML
<tr>
<td valign="top" width="20%">{$cat}</td>
<td valign="top" width="30%"><a href="index.php?a=admin&amp;b=skins&amp;c=edit&amp;cat={$cat_url}">{$LNG['a_man_edit']}</a>
<a href="index.php?a=admin&amp;b=skins&amp;c=delete&amp;cat={$cat_url}">{$LNG['a_man_delete']}</a></td>
<td valign="top" width="50%">
<select name="skin_{$cat}">
<option value="">{$LNG['a_skins_default']}</option>
{$skins_menu}</select><br /><br />
</td>
</tr>
EndHTML;
    }
    $categories_menu .= '</table>';

    $TMPL['admin_content'] = <<<EndHTML
<form action="index.php?a=admin&amp;b=skins" method="post">
<fieldset>
<legend>{$LNG['a_skins_default']}</legend>
{$default_skin_menu}
<input type="submit" name="submit" value="{$LNG['a_skins_set_default']}" />
</fieldset>
</form>
<form action="index.php?a=admin&amp;b=skins" method="post">
<fieldset>
<legend>{$LNG['a_skins_categories']}</legend>
<form action="index.php?a=admin&amp;b=skins" method="post">
<input type="text" name="cat" size="20" />
<input type="submit" name="submit" value="{$LNG['a_skins_new_category']}" /><br /><br />	
</form>
<form action="index.php?a=admin&amp;b=skins" method="post">
{$LNG['a_skins_diff_skins']}<br /><br />
{$categories_menu}
<input type="submit" name="submit_categories" value="{$LNG['a_skins_set_skins']}" />
</fieldset>
</form>
EndHTML;
  }

  function process_default() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (file_exists("{$CONF['path']}/skins/{$FORM['default_skin']}/info.php")) {
      $default_skin = $DB->escape($FORM['default_skin']);

      $DB->query("UPDATE {$CONF['sql_prefix']}_settings SET default_skin = '{$default_skin}'", __FILE__, __LINE__);

      $TMPL['admin_content'] = $LNG['a_skins_default_done'];
    }
    else {
      $this->error(sprintf($LNG['a_skins_invalid_skin'], $FORM['default_skin']), 'admin');
    }
  }

  function process_categories() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $result = $DB->query("SELECT category, skin FROM {$CONF['sql_prefix']}_categories", __FILE__, __LINE__);
    while (list($category, $skin) = $DB->fetch_array($result)) {
      if (isset($FORM["skin_{$category}"]) && file_exists("{$CONF['path']}/skins/{$FORM["skin_{$category}"]}/info.php")) {
        $new_skin = $DB->escape($FORM["skin_{$category}"]);
      }
      else {
        $new_skin = '';
      }

      $DB->query("UPDATE {$CONF['sql_prefix']}_categories SET skin = '{$new_skin}' WHERE category = '{$category}'", __FILE__, __LINE__);
    }
    $TMPL['admin_content'] = $LNG['a_skins_categories_done'];
  }

  function process_new_category() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    $category = $DB->escape($FORM['cat']);
    $result = $DB->query("INSERT INTO {$CONF['sql_prefix']}_categories (category) VALUES ('{$category}')", __FILE__, __LINE__);

    $TMPL['admin_content'] = $LNG['a_skins_new_category_done'];
  }

  function delete_category() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    list($num_cats) = $DB->fetch("SELECT COUNT(*) FROM {$CONF['sql_prefix']}_categories", __FILE__, __LINE__);
    if ($num_cats > 1) {
      $category = $DB->escape($FORM['cat']);
      $result = $DB->query("DELETE FROM {$CONF['sql_prefix']}_categories WHERE category = '{$category}'", __FILE__, __LINE__);

      $TMPL['admin_content'] = $LNG['a_skins_delete_done'];
    }
    else {
      $this->error($LNG['a_skins_delete_error'], 'admin');
    }
  }

  function edit_category() {
    global $CONF, $DB, $FORM, $LNG, $TMPL;

    if (!isset($FORM['submit'])) {
      $cat = $DB->escape($FORM['cat']);
      $cat_url = urlencode($cat);
      $TMPL['admin_content'] = <<<EndHTML
<form action="index.php?a=admin&amp;b=skins&amp;c=edit&amp;cat={$cat_url}" method="post">
<fieldset>
<legend>{$LNG['a_skins_edit_category']}</legend>
<label>{$LNG['a_skins_category_name']}<br />
<input type="text" name="new_cat" size="20" value="{$FORM['cat']}" /><br /><br />
</label>
<input type="submit" name="submit" value="{$LNG['a_skins_edit_category']}" />
</fieldset>
</form>
EndHTML;
    }
    else {
      $category = $DB->escape($FORM['cat']);
      $new_category = $DB->escape($FORM['new_cat']);

      $DB->query("UPDATE {$CONF['sql_prefix']}_categories SET category = '{$new_category}' WHERE category = '{$category}'", __FILE__, __LINE__);
      $DB->query("UPDATE {$CONF['sql_prefix']}_sites SET category = '{$new_category}' WHERE category = '{$category}'", __FILE__, __LINE__);

      $TMPL['admin_content'] = $LNG['a_skins_edit_done'];
    }
  }

  function skins_menu($skin) {
    global $CONF;

    $skins_menu = '';
    $dir = opendir("{$CONF['path']}/skins/");
    while (false !== ($subdir = readdir($dir))) {
      if ($subdir != '.' && $subdir != '..' && file_exists("{$CONF['path']}/skins/{$subdir}/info.php")) {
        unset($name, $author, $email, $url);

        require "{$CONF['path']}/skins/{$subdir}/info.php";
        if ($skin == $subdir) { $skins_menu .= "<option value=\"{$subdir}\" selected=\"selected\">{$name}</option>\n"; }
        else { $skins_menu .= "<option value=\"{$subdir}\">{$name}</option>\n"; }
      }
    }

    return $skins_menu;
  }
}
?>
