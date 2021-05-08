--TEST--
Test finfo_close() function : error conditions
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
/* Prototype  : resource finfo_close(resource finfo)
 * Description: Close fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

echo "*** Testing finfo_close() : error conditions ***\n";

$magicFile = 'magic';
$finfo = finfo_open( FILEINFO_MIME, $magicFile );
$fp = fopen( __FILE__, 'r' );

echo "\n-- Testing finfo_close() function with more than expected no. of arguments --\n";
var_dump( finfo_close( $finfo, '10') );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function finfo_close(): 1 at most, 2 provided in /home/yueguanqun/my-github/bpc-php-7.2.19-tests/ext/fileinfo/tests/finfo_close_error-1.php on line 15
 -- compile-error
