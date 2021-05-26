--TEST--
ZE2 An abstract method may not be called
--FILE--
<?php

class Root {
}

interface MyInterface
{
	static function MyInterfaceFunc();
}

abstract class Derived extends Root implements MyInterface {
}

class Leaf extends Derived
{
	static function MyInterfaceFunc() {}
}

var_dump(new Leaf);

?>
===DONE===
--EXPECT--
object(Leaf)#1 (0) {
}
===DONE===
