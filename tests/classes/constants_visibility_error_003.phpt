--TEST--
A redeclared class constant must have the same or higher visibility
--FILE--
<?php

class A {
	const publicConst = 0;
}

class B extends A {
	const publicConst = 1;
}

var_dump(A::publicConst);
var_dump(B::publicConst);
--EXPECTF--
int(0)
int(1)
