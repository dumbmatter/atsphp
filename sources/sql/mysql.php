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

class sql {
  protected $dbl;
  protected $debug;
  protected $num_queries;
  protected $queries;

  function connect ($host, $user, $password, $database, $debug) {
    $this->dbl = mysql_connect($host, $user, $password) or die(mysql_error());
    $db = mysql_select_db($database, $this->dbl) or die(mysql_error());

    $this->num_queries = 0;
    $this->debug = $debug ? 1 : 0;
    $this->queries = array();

    return $db;
  }

  function execute($query) {
    global $queries;

    if ($this->debug) { array_push($this->queries, $query); }

    $result = mysql_query($query) or die(mysql_error());
    $this->num_queries++;

    return $result;
  }

  function select_limit($query, $num, $offset) {
    global $queries;

    if ($offset) { $limit = " LIMIT $offset,$num"; }
    else { $limit = " LIMIT $num"; }

    if ($this->debug) { array_push($this->queries, $query.$limit); }

    $result = mysql_query($query.$limit) or die(mysql_error());
    $this->num_queries++;

    return $result;
  }

  function fetch_array($result) {
    return mysql_fetch_array($result, MYSQL_ASSOC);
  }

  function num_rows($result) {
    return mysql_num_rows($result);
  }

  function close() {
    mysql_close($this->dbl);
  }

  function get_num_queries() {
    return $this->num_queries;
  }

  function get_queries() {
    return $this->queries;
  }

  function get_debug() {
    return $this->debug;
  }
}
?>
