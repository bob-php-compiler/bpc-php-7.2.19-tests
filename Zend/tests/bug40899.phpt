--TEST--
Bug #40899 (memory leak when nesting list())
--FILE--
<?php
$arr = array(array('a','b'),'c');
list($a,$b) = $arr[0];
list(,$c) = $arr;
echo "$a$b$c\n";
?>
--EXPECT--
abc
