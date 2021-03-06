--TEST--
Test session_encode() function : variation
--FILE--
<?php

/*
 * Prototype : string session_encode(void)
 * Description : Encodes the current session data as a string
 * Source code : ext/session/session.c
 */

echo "*** Testing session_encode() : variation ***\n";

var_dump(session_start());
$_SESSION[] = 1234567890;
var_dump(session_encode());
var_dump(session_destroy());
var_dump(session_start());
$_SESSION[1234567890] = "Hello World!";
var_dump(session_encode());
var_dump(session_destroy());
var_dump(session_start());
$_SESSION[-1234567890] = 1234567890;
var_dump(session_encode());
var_dump(session_destroy());

echo "Done";
?>
--EXPECTF--
*** Testing session_encode() : variation ***
bool(true)

Notice: session_encode(): Skipping numeric key 0 in %s on line %d
bool(false)
bool(true)
bool(true)

Notice: session_encode(): Skipping numeric key 1234567890 in %s on line %d
bool(false)
bool(true)
bool(true)

Notice: session_encode(): Skipping numeric key -1234567890 in %s on line %d
bool(false)
bool(true)
Done
