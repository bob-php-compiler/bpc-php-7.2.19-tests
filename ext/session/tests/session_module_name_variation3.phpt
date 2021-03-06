--TEST--
Test session_module_name() function : variation
--INI--
session.save_path=
session.name=PHPSESSID
session.save_handler=files
--FILE--
<?php



/*
 * Prototype : string session_module_name([string $module])
 * Description : Get and/or set the current session module
 * Source code : ext/session/session.c
 */

echo "*** Testing session_module_name() : variation ***\n";
function open($save_path, $session_name) {
    throw new Exception("Stop...!");
}

function close() { return true; }
function read($id) { return ''; }
function write($id, $session_data) { return true; }
function destroy($id) { return true; }
function gc($maxlifetime) { return true; }

var_dump(session_module_name("files"));
session_set_save_handler("open", "close", "read", "write", "destroy", "gc");
var_dump(session_module_name());
var_dump(session_start());
var_dump(session_module_name());
var_dump(session_destroy());

?>
--EXPECTF--
*** Testing session_module_name() : variation ***
string(5) "files"
string(4) "user"

Fatal error: Uncaught Exception: Stop...! in %s:13
Stack trace:
#0 [internal function]: open('', 'PHPSESSID')
#1 %s(25): session_start(unpassed)
#2 {main}
  thrown in %s on line 25
