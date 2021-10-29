--TEST--
Test wordwrap() function : error conditions
--FILE--
<?php
/* Prototype  : string wordwrap ( string $str [, int $width [, string $break [, bool $cut]]] )
 * Description: Wraps buffer to selected number of characters using string break char
 * Source code: ext/standard/string.c
*/

echo "*** Testing wordwrap() : error conditions ***\n";

// More than expected number of arguments
echo "\n-- Testing wordwrap() function with more than expected no. of arguments --\n";
$str = 'testing wordwrap function';
$width = 10;
$break = '<br />\n';
$cut = true;
$extra_arg = "extra_arg";

var_dump( wordwrap($str, $width, $break, $cut, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function wordwrap(): 4 at most, 5 provided in %s on line %d
 -- compile-error
