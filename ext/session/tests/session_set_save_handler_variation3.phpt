--TEST--
Test session_set_save_handler() function : variation
--INI--
session.auto_start=1
--ARGS--
--bpc-include-file ext/session/tests/save_handler.inc \
--FILE--
<?php



/*
 * Prototype : bool session_set_save_handler(callback $open, callback $close, callback $read, callback $write, callback $destroy, callback $gc)
 * Description : Sets user-level session storage functions
 * Source code : ext/session/session.c
 */

echo "*** Testing session_set_save_handler() : variation ***\n";

require_once "save_handler.inc";
$path = getcwd();
var_dump(session_status());
session_save_path($path);
var_dump(session_set_save_handler("open", "close", "read", "write", "destroy", "gc"));
var_dump(session_destroy());

?>
--EXPECTF--
*** Testing session_set_save_handler() : variation ***
int(2)

Warning: session_save_path(): Cannot change save path when session is active in %s on line 16

Warning: session_set_save_handler(): Cannot change save handler when session is active in %s on line 17
bool(false)
bool(true)
