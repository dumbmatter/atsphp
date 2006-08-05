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
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the    \\
// GNU General Public License for more details.                    \\
//=================================================================\\

$database = 'MySQL Improved';

class sql {
  var $dbl;
  var $debug;
  var $num_queries;
  var $queries;

  function connect ($host, $user, $password, $database, $debug = 0) {
    $this->dbl = new mysqli($host, $user, $password, $database) or $this->error(__FILE__, __LINE__);

    $this->num_queries = 0;
    $this->debug = $debug ? 1 : 0;
    $this->queries = array();

    return $this->dbl;
  }

  function query($query, $file, $line) {
    if ($this->debug) { array_push($this->queries, $query); }

    $result = $this->dbl->query($query) or $this->error($file, $line);
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
    return $result->fetch_array();
  }

  function num_rows($result) {
    return $result->num_rows;
  }

  function escape($value, $no_html = 0) {
    if (get_magic_quotes_gpc()) {
      $value = stripslashes($value);
    }
    $value = $this->dbl->real_escape_string($value);

    if ($no_html) {
      $value = strip_tags($value);
    }
    
    return $value;
  }

  function error($file, $line) {
    if($this->dbl) { $error = $this->dbl->error; }
	else { $error = mysqli_connect_error(); }
    
    trigger_error('Database error in "'.$file.'" on line '.$line.'<br /><br />'."\n".$error, E_USER_ERROR);
  }

  function close() {
    $this->dbl->close();
  }

  /* Backup Table Function */
  function fetch_table_data($table) {
    global $CONFIG;

    $result = $this->db1->query("SELECT * FROM {$table}", __FILE__, __LINE__);
    $fields = $result->fetch_fields();

    $table_fields = '';
    foreach($fields as $field) { $table_fields .= $field->name . ('' == $table_fields ? '' : ', '); }

    for($i = 0; $data = $result->fetch_row($result); $i++) {
      $insert_into .= "INSERT INTO {$table} ({$table_list}) VALUES (";

      for($j = 0; $j < $result->field_count; $j++) {
        if($j != 0) { $insert_into .= ', '; }

        if(!isset($data[$j])) { $insert_into .= ' NULL'; }
        elseif($data[$j] != '') { $insert_into .= ' "' . addslashes($data[$j]) . '"'; }
        else { $insert_into .= ' ""'; }
      }
      $insert_into .= ");\r\n";
    }
    return stripslashes($insert_into);
  }
}
?>
