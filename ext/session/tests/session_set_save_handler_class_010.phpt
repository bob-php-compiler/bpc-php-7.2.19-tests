--TEST--
Test session_set_save_handler() : manual shutdown function
--INI--
session.save_handler=files
session.name=PHPSESSID
--FILE--
<?php

ob_start();

/*
 * Prototype : bool session_set_save_handler(SessionHandler $handler [, bool $register_shutdown_function = true])
 * Description : Sets user-level session storage functions
 * Source code : ext/session/session.c
 */

echo "*** Testing session_set_save_handler() : manual shutdown function ***\n";

class MySession extends SessionHandler {
	public $num;
	public function __construct($num) {
		$this->num = $num;
		echo "(#$this->num) constructor called\n";
	}
	public function __destruct() {
		echo "(#$this->num) destructor called\n";
	}
	public function finish() {
		$id = session_id();
		echo "(#$this->num) finish called $id\n";
		session_write_close();
	}
	public function write($id, $data) {
		echo "(#$this->num) writing $id = $data\n";
		return parent::write($id, $data);
	}
	public function close() {
		$id = session_id();
		echo "(#$this->num) closing $id\n";
		return parent::close();
	}
}

$handler = new MySession(1);
session_set_save_handler($handler, false);
register_shutdown_function(array($handler, 'finish'));
session_start();

$_SESSION['foo'] = 'bar';

echo "done\n";
ob_end_flush();
?>
--EXPECTF--
Warning: in %s line 19: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

*** Testing session_set_save_handler() : manual shutdown function ***
(#1) constructor called
done
(#1) destructor called
(#1) finish called %s
(#1) writing %s = foo|s:3:"bar";
(#1) closing %s
