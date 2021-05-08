--TEST--
Test finfo_open() function : error functionality
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc');
--FILE--
<?php
/* Prototype  : resource finfo_open([int options [, string arg]])
 * Description: Create a new fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = 'magic';

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
unknown, 0: Warning: using regular magic file `%s'
%s: Warning: Unparseable number `a		\b C.S0050-0 V1.0'
%s: Warning: Unparseable number `b		\b C.S0050-0-A V1.0.0'
%s: Warning: Unparseable number `c		\b C.S0050-0-B V1.0'
%s: Warning: Unparseable number `\b:'
%s: Warning: Unparseable number `'
%s: Warning: Unparseable number `ff87 0x2000 Macromedia Flash data'
%s: Warning: Unparseable number `ffe0 0x3000 Macromedia Flash data'
%s: Warning: Overflow for numeric type `leshort' value 0x223e9f78
%s: Warning: Unparseable number `'
*** Testing finfo_open() : error functionality ***

Warning: finfo_open(foobarfile): failed to open stream: No such file or directory in %sfinfo_open_error.php on line 12

Warning: finfo_open(): Failed to load magic database at 'foobarfile'. in %sfinfo_open_error.php on line 12
bool(false)

Warning: finfo_open() expects parameter 1 to be integer, array given in %sfinfo_open_error.php on line 13
bool(false)
resource(%d) of type (file_info)

Warning: finfo_open() expects parameter 1 to be integer, string given in %sfinfo_open_error.php on line 15
bool(false)
finfo::finfo() expects parameter 1 to be integer, string given
===DONE===
