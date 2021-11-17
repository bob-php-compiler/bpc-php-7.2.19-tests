--TEST--
Test fseek(), ftell() & rewind() functions : error conditions - fseek()
--FILE--
<?php

/* Prototype: int fseek ( resource $handle, int $offset [, int $whence] );
   Description: Seeks on a file pointer

   Prototype: bool rewind ( resource $handle );
   Description: Rewind the position of a file pointer

   Prototype: int ftell ( resource $handle );
   Description: Tells file pointer read/write position
*/

echo "*** Testing fseek() : error conditions ***\n";

// unexpected no. of args
echo "-- Testing fseek() with unexpected number of arguments --\n";
$fp = fopen('/proc/self/comm', "r");
var_dump( fseek($fp, 10, $fp,10) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fseek(): 3 at most, 4 provided in %s on line %d
 -- compile-error
