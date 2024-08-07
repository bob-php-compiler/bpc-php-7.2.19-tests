--TEST--
Test finfo_buffer() function : basic functionality
--SKIPIF--
<?php if (LIBMAGIC_VERSION != 532) echo "skip only for libmagic 5.32"; ?>
--CAPTURE_STDIO--
STDOUT
--FILE--
<?php
/* Prototype  : string finfo_buffer(resource finfo, char *string [, int options [, resource context]])
 * Description: Return infromation about a string buffer.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = './magic私はガラスを食べられます';

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
