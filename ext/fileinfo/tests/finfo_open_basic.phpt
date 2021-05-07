--TEST--
Test finfo_open() function : basic functionality
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

echo "*** Testing finfo_open() : basic functionality ***\n";

// Calling finfo_open() with different options
var_dump( finfo_open( FILEINFO_MIME, $magicFile ) );
var_dump( finfo_open( FILEINFO_NONE, $magicFile ) );
var_dump( finfo_open( FILEINFO_SYMLINK, $magicFile ) );
//var_dump( finfo_open( FILEINFO_COMPRESS, $magicFile ) );
var_dump( finfo_open( FILEINFO_DEVICES, $magicFile ) );
var_dump( finfo_open( FILEINFO_CONTINUE, $magicFile ) );
var_dump( finfo_open( FILEINFO_PRESERVE_ATIME, $magicFile ) );
var_dump( finfo_open( FILEINFO_RAW, $magicFile ) );

// OO inteface to finfo
var_dump( new finfo( FILEINFO_MIME, $magicFile ) );
var_dump( new finfo() );

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
*** Testing finfo_open() : basic functionality ***
resource(%d) of type (file_info)
resource(%d) of type (file_info)
resource(%d) of type (file_info)
resource(%d) of type (file_info)
resource(%d) of type (file_info)
resource(%d) of type (file_info)
resource(%d) of type (file_info)
object(finfo)#%d (%d) {
}
object(finfo)#%d (%d) {
}
===DONE===
