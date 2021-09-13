--TEST--
Defining constant twice with two different forms
--FILE--
<?php

define('a', 2);
define('a', 1);


if (defined('a')) {
	print a;
}

?>
--EXPECTF--
Notice: Constant a already defined in %s on line %d
2
