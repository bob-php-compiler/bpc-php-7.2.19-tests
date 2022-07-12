--TEST--
Test hash_file() function : error conditions
--CREDITS--
Felix De Vliegher <felix.devliegher@gmail.com>
--FILE--
<?php

echo "\n-- Testing hash_file() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( hash_file( 'md5', 'filename', false, $extra_arg ) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash_file(): 3 at most, 4 provided in %s on line %d
 -- compile-error
