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
var_dump( popen() );  // Zero Arguments

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function popen(): 2 required, 0 provided in %s on line %d
 -- compile-error
