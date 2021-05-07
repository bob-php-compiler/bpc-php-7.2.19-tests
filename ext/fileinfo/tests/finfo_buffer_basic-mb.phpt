--TEST--
Test finfo_buffer() function : basic functionality
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
/* Prototype  : string finfo_buffer(resource finfo, char *string [, int options [, resource context]])
 * Description: Return infromation about a string buffer.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = 'magic私はガラスを食べられます';

$options = array(
	FILEINFO_NONE,
	FILEINFO_MIME,
);

$buffers = array(
	"Regular string here",
	"\177ELF",
	"\000\000\0001\000\000\0000\000\000\0000\000\000\0002\000\000\0000\000\000\0000\000\000\0003",
	"\x55\x7A\x6E\x61",
	"id=ImageMagick",
	"RIFFüîò^BAVI LISTv",
);

echo "*** Testing finfo_buffer() : basic functionality ***\n";

foreach( $options as $option ) {
	$finfo = finfo_open( $option, $magicFile );
	foreach( $buffers as $string ) {
		var_dump( finfo_buffer( $finfo, $string, $option ) );
	}
	finfo_close( $finfo );
}

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
*** Testing finfo_buffer() : basic functionality ***
string(36) "ASCII text, with no line terminators"
string(3) "ELF"
string(22) "old ACE/gr binary file"
string(12) "xo65 object,"
string(15) "MIFF image data"
string(25) "RIFF (little-endian) data"
string(28) "text/plain; charset=us-ascii"
string(26) "text/plain; charset=ebcdic"
string(40) "application/octet-stream; charset=binary"
string(28) "text/plain; charset=us-ascii"
string(28) "text/plain; charset=us-ascii"
string(25) "text/plain; charset=utf-8"
===DONE===
