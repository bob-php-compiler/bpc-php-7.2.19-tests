--TEST--
Test session_set_save_handler() : incorrect arguments for existing handler close
--INI--
session.save_handler=files
session.name=PHPSESSID
--FILE--
<?php



/*
 * Prototype : bool session_set_save_handler(SessionHandler $handler [, bool $register_shutdown_function = true])
 * Description : Sets user-level session storage functions
 * Source code : ext/session/session.c
 */

echo "*** Testing session_set_save_handler() : incorrect arguments for existing handler close ***\n";

class MySession extends SessionHandler {
	public $i = 0;
	public function open($path, $name) {
		++$this->i;
		echo 'Open ', session_id(), "\n";
		return parent::open($path, $name);
	}
	public function read($key) {
		++$this->i;
		echo 'Read ', session_id(), "\n";
		return parent::read($key);
	}
	public function close() {
		return parent::close(false);
	}
}

$oldHandler = ini_get('session.save_handler');
$handler = new MySession;
session_set_save_handler($handler);
session_start();

var_dump(session_id(), $oldHandler, ini_get('session.save_handler'), $handler->i, $_SESSION);
--EXPECTF--
*** Testing session_set_save_handler() : incorrect arguments for existing handler close ***
Open 
Read %s
string(%d) "%s"
string(5) "files"
string(4) "user"
int(2)
array(0) {
}

Warning: Too many arguments to method SessionHandler::close(): 0 at most, 1 provided in %s on line %d
