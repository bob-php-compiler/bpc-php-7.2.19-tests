--TEST--
Test finfo_open() function : variations in opening
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
if (LIBMAGIC_VERSION != 532) {
    $magicFile .= '-' . LIBMAGIC_VERSION;
}

echo "*** Testing finfo_open() : variations in opening ***\n";

// Calling finfo_open() with different options
var_dump( finfo_open( FILEINFO_MIME | FILEINFO_SYMLINK, $magicFile ) );
//var_dump( finfo_open( FILEINFO_COMPRESS | FILEINFO_PRESERVE_ATIME, $magicFile ) );
var_dump( finfo_open( FILEINFO_DEVICES | FILEINFO_RAW, $magicFile ) );

?>
===DONE===
--EXPECTF--
*** Testing finfo_open() : variations in opening ***
resource(%d) of type (file_info)
resource(%d) of type (file_info)
===DONE===
