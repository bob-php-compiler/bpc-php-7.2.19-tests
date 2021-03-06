--TEST--
Dereferencing expression parentheses
--INI--
zend.enable_gc=1
--FILE--
<?php

$array = array(&$array, 1);
var_dump(($array)[1]);
var_dump((($array[0][0])[0])[1]);

var_dump(((object) array('a' => 0, 'b' => 1))->b);

$obj = (object) array('a' => 0, 'b' => array('var_dump', 1));
(clone $obj)->b[0](1);

?>
--EXPECT--
int(1)
int(1)
int(1)
int(1)
