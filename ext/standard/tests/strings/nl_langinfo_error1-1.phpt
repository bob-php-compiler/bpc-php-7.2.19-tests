--TEST--
Test nl_langinfo() function : error conditions
--SKIPIF--
<?php
if( substr(PHP_OS, 0, 3) == 'WIN'){
  die('skip Not for Windows');
}
?>
--FILE--
<?php

/* Prototype  : string nl_langinfo  ( int $item  )
 * Description: Query language and locale information
 * Source code: ext/standard/string.c
*/

echo "*** Testing nl_langinfo() : error conditions ***\n";

echo "\n-- Testing nl_langinfo() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( nl_langinfo(ABDAY_2, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function nl_langinfo(): 1 at most, 2 provided in %s on line %d
 -- compile-error
