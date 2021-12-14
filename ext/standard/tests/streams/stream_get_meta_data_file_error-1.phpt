--TEST--
Test stream_get_meta_data() function : error conditions
--FILE--
<?php
/* Prototype  : proto array stream_get_meta_data(resource fp)
 * Description: Retrieves header/meta data from streams/file pointers
 * Source code: ext/standard/streamsfuncs.c
 * Alias to functions: socket_get_status
 */

echo "*** Testing stream_get_meta_data() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing stream_get_meta_data() function with Zero arguments --\n";
var_dump( stream_get_meta_data() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stream_get_meta_data(): 1 required, 0 provided in %s on line %d
 -- compile-error
