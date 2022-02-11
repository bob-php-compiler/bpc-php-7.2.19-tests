--TEST--
Test gzinflate() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php

echo "*** Testing gzinflate() : error conditions ***\n";

$data = 'string_val';

echo "\n-- Testing with a buffer that is too small --\n";
$short_len = strlen($data) - 1;
$compressed = gzcompress($data);

var_dump(gzinflate($compressed, $short_len));

echo "\n-- Testing with incorrect parameters --\n";

class Tester {
    function Hello() {
        echo "Hello\n";
    }
}

$testclass = new Tester();
var_dump(gzinflate($testclass));
var_dump(gzinflate($data, $testclass));

?>
===DONE===
--EXPECTF--
*** Testing gzinflate() : error conditions ***

-- Testing with a buffer that is too small --

Warning: gzinflate(): data error in %s on line %d
bool(false)

-- Testing with incorrect parameters --

Warning: gzinflate() expects parameter 1 to be string, object given in %s on line %d
NULL

Warning: gzinflate() expects parameter 2 to be integer, object given in %s on line %d
NULL
===DONE===
