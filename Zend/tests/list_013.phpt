--TEST--
Disallow tail empty elements in normal arrays
--FILE--
<?php

var_dump(array(1, 2, ,));

?>
--EXPECTF--
Parse error: %s in %s on line %d
