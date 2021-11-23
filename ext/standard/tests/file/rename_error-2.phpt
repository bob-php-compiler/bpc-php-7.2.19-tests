--TEST--
Test rename() function: error conditions
--FILE--
<?php
/* Prototype: bool rename ( string $oldname, string $newname [, resource $context] );
   Description: Renames a file or directory
*/

echo "*** Testing rename() for error conditions ***\n";

// more than expected no. of arguments
$context = stream_context_create();
$filename = __FILE__;
$new_filename = __FILE__.".tmp";
var_dump( rename($filename, $new_filename, $context, "extra_args") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rename(): 3 at most, 4 provided in %s on line %d
 -- compile-error
