--TEST--
Test session_start() function : variation
--FILE--
<?php



/*
 * Prototype : bool session_start(void)
 * Description : Initialize session data
 * Source code : ext/session/session.c
 */

echo "*** Testing session_start() : variation ***\n";

var_dump(session_start());
var_dump(session_write_close());
var_dump(session_start());
var_dump(session_write_close());
var_dump(session_start());
var_dump(session_write_close());
var_dump(session_start());
var_dump(session_write_close());
var_dump(session_start());
var_dump(session_write_close());
var_dump(session_destroy());

echo "Done";
?>
--EXPECTF--
*** Testing session_start() : variation ***
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)

Warning: session_destroy(): Trying to destroy uninitialized session in %s on line 23
bool(false)
Done
