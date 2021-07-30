--TEST--
Bug #36006 (Problem with $this in __destruct())
--FILE--
<?php

class Person {
	public $dad;
	public function __destruct() {
		$this->dad = null; /* no segfault if this is commented out */
	}
}

class Dad extends Person {
	public $son;
	public function __construct() {
		$this->son = new Person;
		$this->son->dad = $this; /* no segfault if this is commented out */
	}
	public function __destruct() {
		$this->son = null;
		parent::__destruct(); /* segfault here */
	}
}

$o = new Dad;
unset($o);
echo "ok\n";
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 16: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

ok
