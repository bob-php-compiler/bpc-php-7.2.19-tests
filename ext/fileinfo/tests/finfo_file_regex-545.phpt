--TEST--
Test finfo_file() function : regex rules
--SKIPIF--
<?php if (LIBMAGIC_VERSION != 545) echo "skip only for libmagic 5.45"; ?>
--CAPTURE_STDIO--
STDOUT
--FILE--
<?php
/**
 * Works with the unix file command:
 * $ file -m magic resources/test.awk
 * resources/test.awk: awk script, ASCII text
 */
$magicFile = './magic-545';
$finfo = finfo_open( FILEINFO_MIME, $magicFile );

echo "*** Testing finfo_file() : regex rules ***\n";

// Calling finfo_file() with all possible arguments
$file = './resources/test.awk';
var_dump( finfo_file( $finfo, $file ) );
var_dump( finfo_file( $finfo, $file, FILEINFO_CONTINUE ) );

?>
===DONE===
--EXPECTF--
*** Testing finfo_file() : regex rules ***
string(28) "text/plain; charset=us-ascii"
string(%d) "awk or perl script, ASCII text"
===DONE===
