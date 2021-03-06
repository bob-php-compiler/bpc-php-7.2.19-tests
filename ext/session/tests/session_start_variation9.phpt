--TEST--
Test session_start() function : variation
--INI--
session.auto_start=1
--FILE--
<?php



/*
 * Prototype : bool session_start(void)
 * Description : Initialize session data
 * Source code : ext/session/session.c
 */

echo "*** Testing session_start() : variation ***\n";

var_dump(session_id());
var_dump(session_start());
var_dump(session_id());
var_dump(session_destroy());
var_dump(session_id());

echo "Done";
?>
--EXPECTF--
*** Testing session_start() : variation ***
string(%d) "%s"

Notice: session_start(): A session had already been started - ignoring in %s on line 14
bool(true)
string(%d) "%s"
bool(true)
string(0) ""
Done
