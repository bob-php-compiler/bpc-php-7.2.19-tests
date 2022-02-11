--TEST--
Test gzdeflate() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php
/* Prototype  : string gzdeflate(string data [, int level, [int encoding]])
 * Description: Gzip-compress a string
 * Source code: ext/zlib/zlib.c
 * Alias to functions:
 */

/*
 * add a comment here to say what the test is supposed to do
 */

echo "*** Testing gzdeflate() : error conditions ***\n";

$data = 'string_val';
$level = 2;

echo "\n-- Testing with incorrect compression level --\n";
$bad_level = 99;
var_dump(gzdeflate($data, $bad_level));

echo "\n-- Testing with incorrect encoding --\n";
$bad_encoding = 99;
var_dump(gzdeflate($data, $level, $bad_encoding));

class Tester {
    function Hello() {
        echo "Hello\n";
    }
}

echo "\n-- Testing with incorrect parameters --\n";
$testclass = new Tester();
var_dump(gzdeflate($testclass));
var_dump(gzdeflate($data, $testclass));

?>
===Done===
--EXPECTF--
*** Testing gzdeflate() : error conditions ***

-- Testing with incorrect compression level --

Warning: gzdeflate(): compression level (99) must be within -1..9 in %s on line %d
bool(false)

-- Testing with incorrect encoding --

Warning: gzdeflate(): encoding mode must be either ZLIB_ENCODING_RAW, ZLIB_ENCODING_GZIP or ZLIB_ENCODING_DEFLATE in %s on line %d
bool(false)

-- Testing with incorrect parameters --

Warning: gzdeflate() expects parameter 1 to be string, object given in %s on line %d
NULL

Warning: gzdeflate() expects parameter 2 to be integer, object given in %s on line %d
NULL
===Done===
