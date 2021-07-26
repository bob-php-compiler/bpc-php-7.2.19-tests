--TEST--
Bug #31102 (Exception not handled when thrown inside __autoload())
--ARGS--
--bpc-lib-path /tmp/bug31102
--FILE--
<?php

$test = 0;

spl_autoload_register(function ($class) {
	global $test;

	echo __METHOD__ . "($class,$test)\n";
	switch($test)
	{
	case 1:
		bpc_eval("/tmp/bug31102", "php-$class", "class $class { function __construct(){throw new Exception('$class::__construct');}}");
		return;
	case 2:
		bpc_eval("/tmp/bug31102", "php-$class", "class $class { function __construct(){throw new Exception('$class::__construct');}}");
		throw new Exception(__METHOD__);
		return;
	case 3:
		return;
	}
});

while($test++ < 5)
{
	try
	{
	    $className = "Test$test";
		$bug = new $className();
	}
	catch (Exception $e)
	{
		echo "Caught: " . $e->getMessage() . "\n";
	}
}
?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
{closure}(Test1,1)
Caught: Test1::__construct
{closure}(Test2,2)
Caught: {closure}
{closure}(Test3,3)

Fatal error: Uncaught Error: Class 'Test3' not found in %sbug31102.php:28
Stack trace:
#0 {main}
  thrown in %sbug31102.php on line 28
