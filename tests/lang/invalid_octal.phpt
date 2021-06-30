--TEST--
Invalid octal
--FILE--
<?php

$x = 08;
--EXPECTF--
Parse error: %s in %s on line 3
