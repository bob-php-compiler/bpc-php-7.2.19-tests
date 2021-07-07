--TEST--
Trying to use lambda as array key
--FILE--
<?php

var_dump(array(function() { } => 1));

?>
--EXPECTF--
Parse error: %s in %s on line 3
