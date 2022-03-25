--TEST--
Test session_set_save_handler() function : error functionality
--FILE--
<?php

/*
 * Prototype : bool session_set_save_handler(callback $open, callback $close, callback $read, callback $write, callback $destroy, callback $gc)
 * Description : Sets user-level session storage functions
 * Source code : ext/session/session.c
 */

echo "*** Testing session_set_save_handler() : error functionality ***\n";

function callback() { return true; }

session_set_save_handler("callback", "callback", "callback", "callback", "callback", "callback");
session_set_save_handler("callback", "echo", "callback", "callback", "callback", "callback");
session_set_save_handler("callback", "callback", "echo", "callback", "callback", "callback");
session_set_save_handler("callback", "callback", "callback", "echo", "callback", "callback");
session_set_save_handler("callback", "callback", "callback", "callback", "echo", "callback");
session_set_save_handler("callback", "callback", "callback", "callback", "callback", "echo");
session_set_save_handler("callback", "callback", "callback", "callback", "callback", "callback");
var_dump(session_start());
?>
--EXPECTF--
*** Testing session_set_save_handler() : error functionality ***

Warning: session_set_save_handler(): Argument 2 is not a valid callback in %s on line %d

Warning: session_set_save_handler(): Argument 3 is not a valid callback in %s on line %d

Warning: session_set_save_handler(): Argument 4 is not a valid callback in %s on line %d

Warning: session_set_save_handler(): Argument 5 is not a valid callback in %s on line %d

Warning: session_set_save_handler(): Argument 6 is not a valid callback in %s on line %d

Warning: Too many arguments to function callback(): 0 at most, 2 provided in %s on line %d

Warning: Too many arguments to function callback(): 0 at most, 1 provided in %s on line %d

Warning: session_start(): Failed to read session data: user (%s) in %s on line %d
bool(false)
