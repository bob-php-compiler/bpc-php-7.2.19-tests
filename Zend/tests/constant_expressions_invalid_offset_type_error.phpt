--TEST--
Can't use arrays as key for constant array
--FILE--
<?php

define('C1', 1); // force dynamic evaluation
define('C2', array(C1, array() => 1));

?>
--EXPECTF--
Parse error: Illegal offset type in %s on line %d
