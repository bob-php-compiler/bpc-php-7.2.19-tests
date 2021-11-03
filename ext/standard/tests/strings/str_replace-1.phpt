--TEST--
Test str_replace() function
--FILE--
<?php
/*
  Prototype: mixed str_replace(mixed $search, mixed $replace,
                               mixed $subject [, int &$count]);
  Description: Replace all occurrences of the search string with
               the replacement string
*/

echo "\n*** Testing error conditions ***";
/* Invalid arguments */
var_dump( str_replace() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_replace(): 3 required, 0 provided in %s on line %d
 -- compile-error
