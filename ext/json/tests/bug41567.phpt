--TEST--
Bug #41567 (json_encode() double conversion is inconsistent with PHP)
--INI--
serialize_precision=17
--SKIPIF--
<?php if (!extension_loaded('json')) print 'skip'; ?>
--FILE--
<?php

$a = json_encode(123456789.12345);
var_dump(json_decode($a));

echo "Done\n";
?>
--EXPECT--
float(123456789.12345)
Done
