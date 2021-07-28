--TEST--
Bug #33996 (No information given for fatal error on passing invalid value to typed argument)
--INI--
error_reporting=8191
--FILE--
<?php

function NormalTest($a)
{
    echo "Hi!";
}

try {
	NormalTest();
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function NormalTest(): 1 required, 0 provided in %sbug33996-1.php on line 9
 -- compile-error
