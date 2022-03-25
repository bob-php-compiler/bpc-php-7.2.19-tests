--TEST--
Test session_set_save_handler() : incorrect arguments for existing handler open
--INI--
session.save_handler=files
session.name=PHPSESSID
session.gc_probability=0
--FILE--
<?php



/*
 * Prototype : bool session_set_save_handler(SessionHandler $handler [, bool $register_shutdown_function = true])
 * Description : Sets user-level session storage functions
 * Source code : ext/session/session.c
 */

echo "*** Testing session_set_save_handler() : incorrect arguments for existing handler open ***\n";

class MySession extends SessionHandler {
	public $i = 0;
	public function open($path, $name) {
		++$this->i;
		echo 'Open ', session_id(), "\n";
		// This test was written for broken return value handling
		// Mimmick what was actually being tested by returning true here
		return (null === parent::open());
	}
	public function read($key) {
		++$this->i;
		echo 'Read ', session_id(), "\n";
		return parent::read($key);
	}
}

$oldHandler = ini_get('session.save_handler');
$handler = new MySession;
session_set_save_handler($handler);
var_dump(session_start());

var_dump(session_id(), $oldHandler, ini_get('session.save_handler'), $handler->i, $_SESSION);
?>
--EXPECTF--
*** Testing session_set_save_handler() : incorrect arguments for existing handler open ***
Open 

Fatal error: Uncaught ArgumentCountError: Too few arguments to method SessionHandler::open(): 2 required, 0 provided in %s:20
Stack trace:
#0 [internal function]: MySession->open('', 'PHPSESSID')
#1 %s(32): session_start(unpassed)
#2 {main}
  thrown in %s on line 32
