--TEST--
Test session_set_save_handler() : using objects in close
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

echo "*** Testing session_set_save_handler() : using objects in close ***\n";

class MySession7_Foo {
	public $state = 'ok';
	function __destruct() {
		$this->state = 'destroyed';
	}
}

class MySession7 extends SessionHandler {
	public $foo;
	public function close() {
		var_dump($this->foo);
		@var_dump($GLOBALS['bar']);
		return parent::close();
	}
}

$bar = new MySession7_Foo;
$handler = new MySession7;
$handler->foo = new MySession7_Foo;
session_set_save_handler($handler);
session_start();

ob_end_flush();
?>
--EXPECTF--
Warning: in %s line 15: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

*** Testing session_set_save_handler() : using objects in close ***
object(MySession7_Foo)#%d (%d) {
  ["state"]=>
  string(9) "destroyed"
}
object(MySession7_Foo)#%d (%d) {
  ["state"]=>
  string(9) "destroyed"
}
