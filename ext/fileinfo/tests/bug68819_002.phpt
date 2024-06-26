--TEST--
Bug #68819 Fileinfo on specific file causes spurious OOM and/or segfault, var 2
--FILE--
<?php

$string = '';

// These two in any order
$string .= "\r\n";
$string .= "''''";

// Total string length > 8192
$string .= str_repeat("a", 8184);

// Ending in this string
$string .= "say";

$finfo = new finfo();
$type = $finfo->buffer($string);
var_dump($type);

?>
--EXPECTF--
string(%d) "ASCII text, with very long lines%S, with CRLF line terminators"
