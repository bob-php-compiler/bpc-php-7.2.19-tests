--TEST--
Test session_destroy() function : variation
--FILE--
<?php

/*
 * Prototype : bool session_destroy(void)
 * Description : Destroys all data registered to a session
 * Source code : ext/session/session.c
 */

echo "*** Testing session_destroy() : variation ***\n";

var_dump(session_start());
var_dump(session_destroy());
var_dump(session_destroy());
var_dump(session_destroy());
var_dump(session_destroy());
var_dump(session_destroy());

echo "Done";
?>
--EXPECTF--
*** Testing session_destroy() : variation ***
bool(true)
bool(true)

Warning: session_destroy(): Trying to destroy uninitialized session in %s on line %d
bool(false)

Warning: session_destroy(): Trying to destroy uninitialized session in %s on line %d
bool(false)

Warning: session_destroy(): Trying to destroy uninitialized session in %s on line %d
bool(false)

Warning: session_destroy(): Trying to destroy uninitialized session in %s on line %d
bool(false)
Done
