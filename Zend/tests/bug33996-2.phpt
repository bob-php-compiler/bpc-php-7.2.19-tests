--TEST--
Bug #33996 (No information given for fatal error on passing invalid value to typed argument)
--INI--
error_reporting=8191
--FILE--
<?php
class Foo
{
    // nothing
}

function FooTest(Foo $foo)
{
    echo "Hello!";
}

try {
	FooTest();
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function FooTest(): 1 required, 0 provided in %sbug33996-2.php on line 13
 -- compile-error
