--TEST--
Test fseek(), ftell() & rewind() functions : error conditions - rewind()
--FILE--
<?php

/* Prototype: int fseek ( resource $handle, int $offset [, int $whence] );
   Description: Seeks on a file pointer

   Prototype: bool rewind ( resource $handle );
   Description: Rewind the position of a file pointer

   Prototype: int ftell ( resource $handle );
   Description: Tells file pointer read/write position
*/

echo "*** Testing rewind() : error conditions ***\n";

// more than expected no. of args
echo "-- Testing rewind() with more than expected number of arguments --\n";
$fp = fopen('/proc/self/comm', "r");
var_dump( rewind($fp, 10) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rewind(): 1 at most, 2 provided in %s on line %d
 -- compile-error
