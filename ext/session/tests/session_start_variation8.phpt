--TEST--
Test session_start() function : variation
--FILE--
<?php

ob_start();

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
ob_end_flush();
?>
--EXPECTF--
*** Testing session_start() : variation ***
string(0) ""
bool(true)
string(%d) "%s"
bool(true)
string(0) ""
Done
