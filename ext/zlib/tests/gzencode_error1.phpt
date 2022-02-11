--TEST--
Test gzencode() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php
/* Prototype  : string gzencode  ( string $data  [, int $level  [, int $encoding_mode  ]] )
 * Description: Gzip-compress a string
 * Source code: ext/zlib/zlib.c
 * Alias to functions:
 */

/*
 * Test error cases for gzencode
 */

echo "*** Testing gzencode() : error conditions ***\n";

$data = 'string_val';
$level = 2;

echo "\n-- Testing with incorrect compression level --\n";
$bad_level = 99;
var_dump(gzencode($data, $bad_level));

echo "\n-- Testing with incorrect encoding_mode --\n";
$bad_mode = 99;
var_dump(gzencode($data, $level, $bad_mode));

class Tester {
    function Hello() {
        echo "Hello\n";
    }
}

echo "\n-- Testing with incorrect parameters --\n";
$testclass = new Tester();
var_dump(gzencode($testclass));
var_dump(gzencode($data, $testclass));
var_dump(gzencode($data, -1, 99.99));
var_dump(gzencode($data, -1, $testclass));
var_dump(gzencode($data, "a very none numeric string\n"));

?>
===Done===
--EXPECTF--
*** Testing gzencode() : error conditions ***

-- Testing with incorrect compression level --

Warning: gzencode(): compression level (99) must be within -1..9 in %s on line %d
bool(false)

-- Testing with incorrect encoding_mode --

Warning: gzencode(): encoding mode must be either ZLIB_ENCODING_RAW, ZLIB_ENCODING_GZIP or ZLIB_ENCODING_DEFLATE in %s on line %d
bool(false)

-- Testing with incorrect parameters --

Warning: gzencode() expects parameter 1 to be string, object given in %s on line %d
NULL

Warning: gzencode() expects parameter 2 to be integer, object given in %s on line %d
NULL

Warning: gzencode(): encoding mode must be either ZLIB_ENCODING_RAW, ZLIB_ENCODING_GZIP or ZLIB_ENCODING_DEFLATE in %s on line %d
bool(false)

Warning: gzencode() expects parameter 3 to be integer, object given in %s on line %d
NULL

Warning: gzencode() expects parameter 2 to be integer, string given in %s on line %d
NULL
===Done===
