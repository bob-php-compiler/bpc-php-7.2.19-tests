--TEST--
Test session_module_name() function : variation
--FILE--
<?php

/*
 * Prototype : string session_module_name([string $module])
 * Description : Get and/or set the current session module
 * Source code : ext/session/session.c
 */

echo "*** Testing session_module_name() : variation ***\n";
var_dump(session_module_name("blah"));
var_dump(session_start());
var_dump(session_module_name());
var_dump(session_destroy());
var_dump(session_module_name());

echo "Done";
?>
--EXPECTF--
*** Testing session_module_name() : variation ***

Warning: session_module_name(): Cannot find named PHP session module (blah) in %s on line %d
bool(false)
bool(true)
string(%d) "%s"
bool(true)
string(%d) "%s"
Done
