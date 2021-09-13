--TEST--
Magic constants lowercased
--FILE--
<?php

var_dump(__dir__);
var_dump(__file__);
var_dump(__line__);

class foo {
	public function __construct() {
		var_dump(__method__);
		var_dump(__class__);
		var_dump(__function__);
	}
}

new foo;

?>
--EXPECTF--
string(%d) "%s"
string(%d) "%s"
int(%d)
string(16) "foo::__construct"
string(3) "foo"
string(11) "__construct"
