--TEST--
ZE2 interface and __construct
--FILE--
<?php

class MyObject {}

interface MyInterface
{
	public function __construct(MyObject $o);
}

class MyTestClass implements MyInterface
{
	public function __construct(MyObject $o)
	{
	}
}

$obj = new MyTestClass;

?>
===DONE===
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: Too few arguments to method MyTestClass::__construct(): 1 required, 0 provided in %sinterfaces_003.php:17
Stack trace:
#0 {main}
  thrown in %sinterfaces_003.php on line %d
