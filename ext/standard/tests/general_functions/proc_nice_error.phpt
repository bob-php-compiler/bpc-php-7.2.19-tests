--TEST--
Test function proc_nice() by calling it more than or less than its expected arguments
--SKIPIF--
<?php
if(!function_exists('proc_nice')) die("skip. proc_nice not available ");
?>
--FILE--
<?php
echo "*** Test by calling method or function with incorrect numbers of arguments ***\n";

$priority = 1;

$extra_arg = 1;

var_dump(proc_nice( $priority, $extra_arg) );


?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function proc_nice(): 1 at most, 2 provided in %s line %d
 -- compile-error
