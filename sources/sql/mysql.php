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

$database = 'MySQL';

class sql_mysql {
  var $dbl;
  var $debug;
  var $num_queries;
  var $queries;

  function connect ($host, $user, $password, $database, $debug = 0) {
    $this->dbl = mysql_connect($host, $user, $password)	;
    $db = mysql_select_db($database, $this->dbl);

    $this->num_queries = 0;
    $this->debug = $debug ? 1 : 0;
    $this->queries = array();

    return $db;
  }

  function query($query, $file, $line) {
    global $queries;

    if ($this->debug) { array_push($this->queries, $query); }

    $result = mysql_query($query) or $this->error($file, $line);
    $this->num_queries++;

    return $result;
  }

  // Executes a normal query and fetches the array in one line
  function fetch($query, $file, $line) {
    $result = $this->query($query, $file, $line);
    return $this->fetch_array($result);
  }

  function select_limit($query, $num, $offset, $file, $line) {
    if ($offset) { $limit = ' LIMIT '.$offset.','.$num; }
    else { $limit = ' LIMIT '.$num; }

    return $this->query($query.$limit, $file, $line);
  }

  function fetch_array($result) {
    return mysql_fetch_array($result);
  }

  function num_rows($result) {
    return mysql_num_rows($result);
  }

  function escape($value, $no_html = 0) {
    if (get_magic_quotes_gpc()) {
      $value = stripslashes($value);
    }
    $value = mysql_real_escape_string($value, $this->dbl);

    if ($no_html) {
      $value = strip_tags($value);
    }
    
    return $value;
  }

  function error($file, $line) {
    trigger_error("Database error in &quot;<b>{$file}</b>&quot; on line <b>{$line}</b><br /><br />\n" . @mysql_error($this->dbl), E_USER_ERROR);
  }

  function close() {
    mysql_close($this->dbl);
  }

  // For backups
  function get_table($table, $data = 1) {
    $create_table = $this->fetch("SHOW CREATE TABLE {$table}", __FILE__, __LINE__);
    $create_table = $create_table['Create Table'] . ";\n\n";

    if ($data) {
      $result = $this->query("SELECT * FROM {$table}", __FILE__, __LINE__);

      $table_fields = '';
      $insert_into = '';
      $table_list = '';

      $num_fields = mysql_num_fields($result);
      for($i = 0; $i < $num_fields; $i++) {
        $table_fields .= ($i == 0 ? '' : ', ') . mysql_field_name($result, $i);
      }

      for($i = 0; $data = mysql_fetch_row($result); $i++) {
        $insert_into .= "INSERT INTO {$table} ({$table_fields}) VALUES (";

        for($j = 0; $j < $num_fields; $j++) {
          if($j != 0) { $insert_into .= ', '; }

          if(!isset($data[$j])) { $insert_into .= 'NULL'; }
          elseif(is_numeric($data[$j]) && (intval($data[$j]) == $data[$j])) { $insert_into .= intval($data[$j]); }
          elseif($data[$j] != '') { $insert_into .= "'" . $this->escape($data[$j]) . "'"; }
          else { $insert_into .= "''"; }
        }
        $insert_into .= ");\n";
      }
      $insert_into .= "\n\n";
    }
    else {
      $insert_into = '';
    }

    return $create_table . $insert_into;
  }
}
?>
