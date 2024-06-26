--TEST--
Test finfo_open() function : error functionality
--CAPTURE_STDIO--
STDOUT
--FILE--
<?php
/* Prototype  : resource finfo_open([int options [, string arg]])
 * Description: Create a new fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = './magic';
if (LIBMAGIC_VERSION == 545) {
    $magicFile .= '-545';
}

echo "*** Testing finfo_open() : error functionality ***\n";

var_dump( finfo_open( FILEINFO_MIME, 'foobarfile' ) );
var_dump( finfo_open( array(), $magicFile ) );

var_dump( finfo_open( PHP_INT_MAX - 1, $magicFile ) );
var_dump( finfo_open( 'foobar' ) );

try {
    var_dump( new finfo('foobar') );
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

?>
===DONE===
--EXPECTF--
*** Testing finfo_open() : error functionality ***

Warning: finfo_open(): Failed to load magic database at 'foobarfile'. in %sfinfo_open_error.php on line %d
bool(false)

Warning: finfo_open() expects parameter 1 to be integer, array given in %sfinfo_open_error.php on line %d
bool(false)
resource(%d) of type (file_info)

Warning: finfo_open() expects parameter 1 to be integer, string given in %sfinfo_open_error.php on line %d
bool(false)
finfo::__construct() expects parameter 1 to be integer, string given
===DONE===
