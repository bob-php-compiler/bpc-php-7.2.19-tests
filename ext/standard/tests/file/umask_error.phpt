--TEST--
Test umask() function: error conditions
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip.. only for Linux');
}
?>
--FILE--
<?php
/* Prototype: int umask ( [int $mask] );
   Description: Changes the current umask
*/

echo "*** Testing umask() : error conditions ***\n";

var_dump( umask(0000, true) );  // args > expected

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function umask(): 1 at most, 2 provided in %s on line %d
 -- compile-error
