--TEST--
func_get_arg test
--FILE--
<?php

function foo($a)
{
   $a=5;
   echo func_get_arg();
}
foo(2);
echo "\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function func_get_arg(): 1 required, 0 provided in %s on line %d
 -- compile-error
