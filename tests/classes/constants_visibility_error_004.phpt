--TEST--
A redeclared class constant must have the same or higher visibility
--FILE--
<?php

class A {
	const protectedConst = 0;
}

class B extends A {
	const protectedConst = 1;
}
var_dump(A::protectedConst);
var_dump(B::protectedConst);
--EXPECTF--
int(0)
int(1)
