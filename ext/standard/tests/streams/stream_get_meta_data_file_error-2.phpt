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

//Test stream_get_meta_data with one more than the expected number of arguments
echo "\n-- Testing stream_get_meta_data() function with more than expected no. of arguments --\n";

$fp = null;
$extra_arg = 10;
var_dump( stream_get_meta_data($fp, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function stream_get_meta_data(): 1 at most, 2 provided in %s on line %d
 -- compile-error
