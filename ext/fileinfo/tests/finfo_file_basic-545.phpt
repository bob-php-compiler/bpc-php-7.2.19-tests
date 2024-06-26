--TEST--
Test finfo_file() function : basic functionality
--SKIPIF--
<?php if (LIBMAGIC_VERSION != 545) echo "skip only for libmagic 5.45"; ?>
--FILE--
<?php
/* Prototype  : string finfo_file(resource finfo, char *file_name [, int options [, resource context]])
 * Description: Return information about a file.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = './magic-545';
$finfo = finfo_open( FILEINFO_MIME );

echo "*** Testing finfo_file() : basic functionality ***\n";

// Calling finfo_file() with all possible arguments
var_dump( finfo_file( $finfo, 'finfo_file_basic-545.php') );
var_dump( finfo_file( $finfo, 'finfo_file_basic-545.php', FILEINFO_CONTINUE ) );
var_dump( finfo_file( $finfo, $magicFile ) );
var_dump( finfo_file( $finfo, $magicFile.chr(0).$magicFile) );

?>
===DONE===
--EXPECTF--
*** Testing finfo_file() : basic functionality ***
string(28) "text/x-php; charset=us-ascii"
string(22) "PHP script, ASCII text"
string(28) "text/plain; charset=us-ascii"

Warning: finfo_file() expects parameter 2 to be a valid path, string given in %s on line %d
bool(false)
===DONE===
