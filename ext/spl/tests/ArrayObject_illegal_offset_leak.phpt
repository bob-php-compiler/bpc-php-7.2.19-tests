--TEST--
Assignments to illegal ArrayObject offsets shouldn't leak
--FILE--
<?php

$ao = new ArrayObject(array(1, 2, 3));
$ao[array()] = new stdClass;

?>
--EXPECTF--
Warning: Illegal offset type in %s on line %d
