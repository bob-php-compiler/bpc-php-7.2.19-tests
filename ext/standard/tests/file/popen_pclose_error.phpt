--TEST--
Test popen() and pclose function: error conditions
--SKIPIF--
<?php
if(substr(PHP_OS, 0, 3) == 'WIN' || strtoupper( substr(PHP_OS, 0, 3) ) == 'SUN')
  die("skip Not Valid for Windows & Sun Solaris");
?>
--FILE--
<?php
/*
 * Prototype: resource popen ( string command, string mode )
 * Description: Opens process file pointer.

 * Prototype: int pclose ( resource handle );
 * Description: Closes process file pointer.
 */
echo "*** Testing for error conditions ***\n";
var_dump( popen("abc.txt", "rw") );   // Invalid mode Argument
var_dump( pclose(1) );
echo "\n--- Done ---";
?>
--EXPECTF--
*** Testing for error conditions ***

Warning: popen(abc.txt,rw): %s on line %d
bool(false)

Warning: pclose() expects parameter 1 to be resource, integer given in %s on line %d
bool(false)

--- Done ---
