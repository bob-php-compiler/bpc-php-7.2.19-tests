--TEST--
Bug #21820 ("$arr['foo']" generates bogus E_NOTICE, should be E_PARSE)
--FILE--
<?php

error_reporting(E_ALL);

$arr = array('foo' => 'bar');
echo "$arr['foo']";

?>
--EXPECTF--
bar
