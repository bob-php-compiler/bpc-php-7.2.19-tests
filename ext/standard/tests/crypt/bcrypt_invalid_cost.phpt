--TEST--
Test BCRYPT with invalid cost
--FILE--
<?php
var_dump(crypt("test", "$2a$4$1234567891234567891234567"));
var_dump(crypt("test", "$2a$00$1234567891234567891234567"));
var_dump(crypt("test", "$2a$01$1234567891234567891234567"));
var_dump(crypt("test", "$2a$02$1234567891234567891234567"));
var_dump(crypt("test", "$2a$03$1234567891234567891234567"));
var_dump(crypt("test", "$2a$32$1234567891234567891234567"));
var_dump(crypt("test", "$2a$40$1234567891234567891234567"));
?>
--EXPECTF--
Warning: crypt(): salt '$2a$4$1234567891234567891234567' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$2a$00$1234567891234567891234567' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$2a$01$1234567891234567891234567' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$2a$02$1234567891234567891234567' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$2a$03$1234567891234567891234567' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$2a$32$1234567891234567891234567' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$2a$40$1234567891234567891234567' has the wrong format in %s on line %d
string(2) "*0"
