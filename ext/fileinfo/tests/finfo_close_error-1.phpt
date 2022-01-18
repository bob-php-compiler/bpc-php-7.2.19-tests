--TEST--
Test finfo_close() function : error conditions
--FILE--
<?php
/* Prototype  : resource finfo_close(resource finfo)
 * Description: Close fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

echo "*** Testing finfo_close() : error conditions ***\n";

echo "\n-- Testing finfo_close() function with Zero arguments --\n";
var_dump( finfo_close() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function finfo_close(): 1 required, 0 provided in %s on line %d
 -- compile-error
