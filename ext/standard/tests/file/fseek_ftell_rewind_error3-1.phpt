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
// zero argument
echo "-- Testing rewind() with zero argument --\n";
var_dump( rewind() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rewind(): 1 required, 0 provided in %s on line %d
 -- compile-error
