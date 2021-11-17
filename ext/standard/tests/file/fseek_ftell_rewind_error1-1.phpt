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
// zero argument
echo "-- Testing fseek() with zero argument --\n";
var_dump( fseek() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fseek(): 2 required, 0 provided in %s on line %d
 -- compile-error
