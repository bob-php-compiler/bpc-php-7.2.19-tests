--TEST--
Test finfo_set_flags() function : basic functionality
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
/* Prototype  : bool finfo_set_flags(resource finfo, int options)
 * Description: Set libmagic configuration options.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = 'magic';

// OO way
$finfo = new finfo( FILEINFO_NONE, $magicFile );
var_dump( $finfo->set_flags() );

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

Fatal error: Too few arguments to method finfo::set_flags(): 1 required, 0 provided in %sfinfo_set_flags_basic-2.php on line 12
