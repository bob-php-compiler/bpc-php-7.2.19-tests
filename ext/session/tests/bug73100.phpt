--TEST--
Bug #73100 (session_destroy null dereference in ps_files_path_create)
--INI--
session.save_path=
session.save_handler=files
--FILE--
<?php

var_dump(session_start());
session_module_name("user");
var_dump(session_destroy());

session_module_name("user");
?>
===DONE===
--EXPECTF--
bool(true)

Warning: session_module_name(): Cannot change save handler module when session is active in %s on line 4
bool(true)

Recoverable fatal error: Cannot set 'user' save handler by ini_set() or session_module_name() in %s on line 7
