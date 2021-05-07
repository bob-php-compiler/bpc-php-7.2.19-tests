--TEST--
Test finfo_set_flags() function : basic functionality
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
/* Prototype  : bool finfo_set_flags(resource finfo, int options)
 * Description: Set libmagic configuration options.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = 'magic';
$finfo = finfo_open( FILEINFO_MIME, $magicFile );

echo "*** Testing finfo_set_flags() : basic functionality ***\n";
var_dump( finfo_set_flags() );
finfo_close( $finfo );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function finfo_set_flags(): 2 required, 0 provided in %sfinfo_set_flags_basic-1.php on line 12
 -- compile-error
