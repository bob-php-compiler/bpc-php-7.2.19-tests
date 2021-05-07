--TEST--
Test finfo_close() function : basic functionality
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
/* Prototype  : resource finfo_close(resource finfo)
 * Description: Close fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

echo "*** Testing finfo_close() : basic functionality ***\n";

$magicFile = 'magic';

$finfo = finfo_open( FILEINFO_MIME, $magicFile );
var_dump( $finfo );

// Calling finfo_close() with all possible arguments
var_dump( finfo_close($finfo) );

$finfo = new finfo( FILEINFO_MIME, $magicFile );
var_dump( $finfo );
unset( $finfo );

?>
===DONE===
--EXPECTF--
%s, %d: Warning: Unparseable number `a		\b C.S0050-0 V1.0'
%s, %d: Warning: Unparseable number `b		\b C.S0050-0-A V1.0.0'
%s, %d: Warning: Unparseable number `c		\b C.S0050-0-B V1.0'
%s, %d: Warning: Unparseable number `\b:'
%s, %d: Warning: Unparseable number `'
%s, %d: Warning: Unparseable number `ff87 0x2000 Macromedia Flash data'
%s, %d: Warning: Unparseable number `ffe0 0x3000 Macromedia Flash data'
%s, %d: Warning: Overflow for numeric type `leshort' value 0x223e9f78
%s, %d: Warning: Unparseable number `'
%s, %d: Warning: Unparseable number `a		\b C.S0050-0 V1.0'
%s, %d: Warning: Unparseable number `b		\b C.S0050-0-A V1.0.0'
%s, %d: Warning: Unparseable number `c		\b C.S0050-0-B V1.0'
%s, %d: Warning: Unparseable number `\b:'
%s, %d: Warning: Unparseable number `'
%s, %d: Warning: Unparseable number `ff87 0x2000 Macromedia Flash data'
%s, %d: Warning: Unparseable number `ffe0 0x3000 Macromedia Flash data'
%s, %d: Warning: Overflow for numeric type `leshort' value 0x223e9f78
%s, %d: Warning: Unparseable number `'
*** Testing finfo_close() : basic functionality ***
resource(%d) of type (file_info)
bool(true)
object(finfo)#%d (%d) {
}
===DONE===
