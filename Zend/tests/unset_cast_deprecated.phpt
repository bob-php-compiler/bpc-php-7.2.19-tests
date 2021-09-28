--TEST--
The (unset) cast is deprecated
--FILE--
<?php

$x = 1;
var_dump((unset) $x);
var_dump($x);

?>
--EXPECTF--
Parse error: %s in %s on line 4
