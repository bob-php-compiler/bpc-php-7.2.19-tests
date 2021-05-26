--TEST--
ZE2 An abstrcat method cannot be called indirectly
--FILE--
<?php

abstract class test_base
{
	abstract function func();
}

class test extends test_base
{
	function func()
	{
		echo __METHOD__ . "()\n";
	}
}

$o = new test;

$o->func();

call_user_func(array($o, 'test_base::func'));

?>
===DONE===
--EXPECTF--
test::func()

Fatal error: Uncaught Error: Call to undefined method test::test_base::func() in %sabstract_user_call.php:%d
Stack trace:
#0 %sabstract_user_call.php(%d): call_user_func(Array)
#1 {main}
  thrown in %sabstract_user_call.php on line %d
