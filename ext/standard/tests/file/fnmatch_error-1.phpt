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

/* No.of arguments less than expected */
var_dump( fnmatch("match.txt") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fnmatch(): 2 required, 1 provided in %s on line %d
 -- compile-error
