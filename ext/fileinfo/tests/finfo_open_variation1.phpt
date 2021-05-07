--TEST--
Test finfo_open() function : variations in opening
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
/* Prototype  : resource finfo_open([int options [, string arg]])
 * Description: Create a new fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = 'magic';

echo "*** Testing finfo_open() : variations in opening ***\n";

// Calling finfo_open() with different options
var_dump( finfo_open( FILEINFO_MIME | FILEINFO_SYMLINK, $magicFile ) );
//var_dump( finfo_open( FILEINFO_COMPRESS | FILEINFO_PRESERVE_ATIME, $magicFile ) );
var_dump( finfo_open( FILEINFO_DEVICES | FILEINFO_RAW, $magicFile ) );

?>
===DONE===
--EXPECTF--
%s: Warning: Unparseable number `a		\b C.S0050-0 V1.0'
%s: Warning: Unparseable number `b		\b C.S0050-0-A V1.0.0'
%s: Warning: Unparseable number `c		\b C.S0050-0-B V1.0'
%s: Warning: Unparseable number `\b:'
%s: Warning: Unparseable number `'
%s: Warning: Unparseable number `ff87 0x2000 Macromedia Flash data'
%s: Warning: Unparseable number `ffe0 0x3000 Macromedia Flash data'
%s: Warning: Overflow for numeric type `leshort' value 0x223e9f78
%s: Warning: Unparseable number `'
%s: Warning: Unparseable number `a		\b C.S0050-0 V1.0'
%s: Warning: Unparseable number `b		\b C.S0050-0-A V1.0.0'
%s: Warning: Unparseable number `c		\b C.S0050-0-B V1.0'
%s: Warning: Unparseable number `\b:'
%s: Warning: Unparseable number `'
%s: Warning: Unparseable number `ff87 0x2000 Macromedia Flash data'
%s: Warning: Unparseable number `ffe0 0x3000 Macromedia Flash data'
%s: Warning: Overflow for numeric type `leshort' value 0x223e9f78
%s: Warning: Unparseable number `'
*** Testing finfo_open() : variations in opening ***
resource(%d) of type (file_info)
resource(%d) of type (file_info)
===DONE===
