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

class backup_database extends base {
  function backup_database() {
    global $CONF, $DB;

    $tables_to_backup = array(
      "{$CONF['sql_prefix']}_settings" => true,
      "{$CONF['sql_prefix']}_bad_words" => true,
      "{$CONF['sql_prefix']}_ban" => true;
      "{$CONF['sql_prefix']}_custom_pages" => true,
      "{$CONF['sql_prefix']}_etc" => true,
      "{$CONF['sql_prefix']}_categories" => true,
      "{$CONF['sql_prefix']}_ip_log" => false,
      "{$CONF['sql_prefix']}_reviews" => true,
      "{$CONF['sql_prefix']}_sessions" => false,
      "{$CONF['sql_prefix']}_sites" => true,
      "{$CONF['sql_prefix']}_stats" => true,
    );

    header('Pragma: no-cache');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Content-Disposition: attachment; filename="' . $CONF['list_name'] . date(' Y-m-d') . '.sql"');
    header('Content-Type: text/x-sql');
    foreach($tables_to_backup as $table_name => $save_data) {
      echo $DB->get_table($table_name, $save_data);
    }

    exit;
  }
}
?>
