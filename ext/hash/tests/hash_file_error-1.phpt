--TEST--
Test hash_file() function : error conditions
--CREDITS--
Felix De Vliegher <felix.devliegher@gmail.com>
--FILE--
<?php

echo "\n-- Testing hash_file() function with less than expected no. of arguments --\n";
var_dump( hash_file( 'md5' ) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_file(): 2 required, 1 provided in %s on line %d
 -- compile-error
