--TEST--
Test session_set_save_handler() function : error functionality
--INI--
session.save_path=
session.name=PHPSESSID
session.save_handler=files
--FILE--
<?php



/*
 * Prototype : bool session_set_save_handler(callback $open, callback $close, callback $read, callback $write, callback $destroy, callback $gc)
 * Description : Sets user-level session storage functions
 * Source code : ext/session/session.c
 */

echo "*** Testing session_set_save_handler() : error functionality ***\n";
function open($save_path, $session_name) {
     throw new Exception("Do something bad..!");
}

function close() { return true; }
function read($id) { return false; }
function write($id, $session_data) { }
function destroy($id) {  return true; }
function gc($maxlifetime) {  return true; }

session_set_save_handler("open", "close", "read", "write", "destroy", "gc");
session_start();
?>
--EXPECTF--
*** Testing session_set_save_handler() : error functionality ***

Fatal error: Uncaught Exception: Do something bad..! in %s:13
Stack trace:
#0 [internal function]: open('', 'PHPSESSID')
#1 %s(23): session_start(unpassed)
#2 {main}
  thrown in %s on line 23
