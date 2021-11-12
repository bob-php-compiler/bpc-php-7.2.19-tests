--TEST--
Testing unlink() function : error conditions
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip.. only on Linux');
}
?>
--FILE--
<?php
/* Prototype : bool unlink ( string $filename [, resource $context] );
   Description : Deletes filename
*/

echo "*** Testing unlink() : error conditions ***\n";

echo "-- Testing unlink() on unexpected no. of arguments --\n";
// arg < expected
var_dump( unlink() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function unlink(): 1 required, 0 provided in %s on line %d
 -- compile-error
