--TEST--
Const class properties(runtime cache)
--FILE--
<?php
var_dump($a->{array()});
?>
--EXPECTF--
Parse error: bpc will not convert `{array(...)}` to string "Array" in %s on line 2
