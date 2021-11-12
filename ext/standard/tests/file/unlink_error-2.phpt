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

// creating a context
$context = stream_context_create();

echo "*** Testing unlink() : error conditions ***\n";

echo "-- Testing unlink() on unexpected no. of arguments --\n";
// args > expected
var_dump( unlink('a.txt', $context, true) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function unlink(): 2 at most, 3 provided in %s on line %d
 -- compile-error
