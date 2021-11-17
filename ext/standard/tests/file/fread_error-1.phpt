--TEST--
Test fread() function : error conditions
--FILE--
<?php
/*
 Prototype: string fread ( resource $handle [, int $length] );
 Description: reads up to length bytes from the file pointer referenced by handle.
   Reading stops when up to length bytes have been read, EOF (end of file) is
   reached, (for network streams) when a packet becomes available, or (after
   opening userspace stream) when 8192 bytes have been read whichever comes first.
*/

echo "*** Testing error conditions ***\n";

// zero argument
echo "-- Testing fread() with zero argument --\n";
var_dump( fread() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fread(): 2 required, 0 provided in %s on line %d
 -- compile-error
