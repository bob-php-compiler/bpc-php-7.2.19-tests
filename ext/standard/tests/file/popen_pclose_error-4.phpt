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
$file_handle = fopen('/proc/self/comm', 'r');
var_dump( pclose($file_handle, $file_handle) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function pclose(): 1 at most, 2 provided in %s on line %d
 -- compile-error
