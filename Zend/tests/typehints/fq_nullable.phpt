--TEST--
Fully-qualified nullable parameter type
--FILE--
<?php

function test(?stdClass $param) {}
test(new stdClass);

?>
===DONE===
--EXPECT--
===DONE===
