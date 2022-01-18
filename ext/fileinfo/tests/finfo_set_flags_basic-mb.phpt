--TEST--
Test finfo_set_flags() function : basic functionality
--CAPTURE_STDIO--
STDOUT
--FILE--
<?php
/* Prototype  : bool finfo_set_flags(resource finfo, int options)
 * Description: Set libmagic configuration options.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = './magic私はガラスを食べられます';
$finfo = finfo_open( FILEINFO_MIME, $magicFile );

echo "*** Testing finfo_set_flags() : basic functionality ***\n";

var_dump( finfo_set_flags( $finfo, FILEINFO_NONE ) );
var_dump( finfo_set_flags( $finfo, FILEINFO_SYMLINK ) );

finfo_close( $finfo );

// OO way
$finfo = new finfo( FILEINFO_NONE, $magicFile );
var_dump( $finfo->set_flags( FILEINFO_MIME ) );
try {
    var_dump( $finfo->set_flags() );
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

?>
===DONE===
--EXPECTF--
*** Testing finfo_set_flags() : basic functionality ***
bool(true)
bool(true)
bool(true)
Too few arguments to method finfo::set_flags(): 1 required, 0 provided
===DONE===
