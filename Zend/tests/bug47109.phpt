--TEST--
Bug #47109 (Memory leak on $a->{"a"."b"} when $a is not an object)
--FILE--
<?php
$a->{"a"."b"};
?>
--EXPECTF--
Notice: Trying to get property 'ab' of non-object in %sbug47109.php on line 0
