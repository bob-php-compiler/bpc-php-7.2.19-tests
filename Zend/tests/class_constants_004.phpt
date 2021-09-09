--TEST--
Testing constants (normal, class and interface)
--FILE--
<?php

define('foo', 3);

class foo {
	const foo = 2;
}

interface Ifoo {
	const foo = 4;
}

var_dump(	foo,
			foo::foo,
			constant('foo'),
			Ifoo::foo
			);

?>
--EXPECT--
int(3)
int(2)
int(3)
int(4)
