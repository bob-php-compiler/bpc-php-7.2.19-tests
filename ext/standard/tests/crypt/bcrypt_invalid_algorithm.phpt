--TEST--
Test BCRYPT with invalid algorithm
--FILE--
<?php
var_dump(crypt("test", "$23$04$1234567890123456789012345"));
var_dump(crypt("test", "$20$04$1234567890123456789012345"));
var_dump(crypt("test", "$2g$04$1234567890123456789012345"));
?>
--EXPECTF--
Warning: crypt(): salt '$23$04$1234567890123456789012345' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$20$04$1234567890123456789012345' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$2g$04$1234567890123456789012345' has the wrong format in %s on line %d
string(2) "*0"
