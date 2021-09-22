--TEST--
Testing 'static::' and 'parent::' in calls
--FILE--
<?php

class bar {
	public function __call($a, $b) {
		print "hello\n";
	}
}

class foo extends bar {
	public function __construct() {
		parent::bar();
	}
}


new foo;

?>
--EXPECT--
hello
