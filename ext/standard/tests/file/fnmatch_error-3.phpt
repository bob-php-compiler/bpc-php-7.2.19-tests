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

/* No.of arguments greater than expected */
var_dump( fnmatch("match.txt", "match.txt", TRUE, 100) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fnmatch(): 3 at most, 4 provided in %s on line %d%d
 -- compile-error
