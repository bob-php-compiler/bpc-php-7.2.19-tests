--TEST--
func_get_arg test
--FILE--
<?php

function foo($a)
{
   $a=5;
   echo func_get_arg(2,2);
}
foo(2);
echo "\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function func_get_arg(): 1 at most, 2 provided in %s on line %d
 -- compile-error
