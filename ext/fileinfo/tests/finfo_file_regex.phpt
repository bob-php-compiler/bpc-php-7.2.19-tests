--TEST--
Test finfo_file() function : regex rules
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc');
?>
--FILE--
<?php
/**
 * Works with the unix file command:
 * $ file -m magic resources/test.awk
 * resources/test.awk: awk script, ASCII text
 */
$magicFile = 'magic';
$finfo = finfo_open( FILEINFO_MIME, $magicFile );

echo "*** Testing finfo_file() : regex rules ***\n";

// Calling finfo_file() with all possible arguments
$file = 'resources/test.awk';
var_dump( finfo_file( $finfo, $file ) );
var_dump( finfo_file( $finfo, $file, FILEINFO_CONTINUE ) );

?>

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
*** Testing finfo_file() : regex rules ***
string(28) "text/plain; charset=us-ascii"
string(%d) "awk%sscript, ASCII text\012- data"
