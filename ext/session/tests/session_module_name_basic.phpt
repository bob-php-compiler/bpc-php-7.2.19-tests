--TEST--
Test session_module_name() function : basic functionality
--FILE--
<?php

ob_start();

/*
 * Prototype : string session_module_name([string $module])
 * Description : Get and/or set the current session module
 * Source code : ext/session/session.c
 */

echo "*** Testing session_module_name() : basic functionality ***\n";
var_dump(session_module_name("files"));
var_dump(session_module_name());
var_dump(session_start());
var_dump(session_module_name());
var_dump(session_destroy());
var_dump(session_module_name());

echo "Done";
ob_end_flush();
?>
--EXPECTF--
*** Testing session_module_name() : basic functionality ***
string(%d) "%s"
string(5) "files"
bool(true)
string(5) "files"
bool(true)
string(5) "files"
Done
