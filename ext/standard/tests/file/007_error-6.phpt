--TEST--
Test fopen, fclose() & feof() functions: error conditions
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php
/*
 Prototype: resource fopen(string $filename, string $mode
                            [, bool $use_include_path [, resource $context]] );
 Description: Opens file or URL.

 Prototype: bool fclose ( resource $handle );
 Description: Closes an open file pointer

 Prototype: bool feof ( resource $handle )
 Description: Returns TRUE if the file pointer is at EOF or an error occurs
   (including socket timeout); otherwise returns FALSE.
*/

echo "*** Testing error conditions for fopen(), fclsoe() & feof() ***\n";

$fp = fopen('/proc/self/comm', "r");
var_dump( fclose($fp, "handle") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fclose(): 1 at most, 2 provided in %s on line %d
 -- compile-error
