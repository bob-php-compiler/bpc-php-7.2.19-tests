--TEST--
Trying to create a constant on Trait
--FILE--
<?php

trait foo {
	const a = 1;
}

class C
{
    use foo;
}

var_dump(C::a);

?>
--EXPECT--
int(1)
