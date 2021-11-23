--TEST--
Test fnmatch() function: Error conditions
--SKIPIF--
<?php
if (!function_exists('fnmatch'))
    die("skip fnmatch() function is not available");
?>
--FILE--
<?php
/* Prototype: bool fnmatch ( string $pattern, string $string [, int $flags] )
   Description: fnmatch() checks if the passed string would match
     the given shell wildcard pattern.
*/

echo "*** Testing error conditions for fnmatch() ***";

/* Invalid arguments */
var_dump( fnmatch(array(), array()) );

$file_handle = fopen('/proc/self/comm', "r");
var_dump( fnmatch($file_handle, $file_handle) );
fclose( $file_handle );

$std_obj = new stdClass();
var_dump( fnmatch($std_obj, $std_obj) );


echo "\n*** Done ***\n";
?>
--EXPECTF--
*** Testing error conditions for fnmatch() ***
Warning: fnmatch() expects parameter 1 to be a valid path, array given in %s on line %d
NULL

Warning: fnmatch() expects parameter 1 to be a valid path, resource given in %s on line %d
NULL

Warning: fnmatch() expects parameter 1 to be a valid path, object given in %s on line %d
NULL

*** Done ***
