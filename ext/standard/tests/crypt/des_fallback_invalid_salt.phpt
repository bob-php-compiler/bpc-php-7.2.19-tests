--TEST--
Test DES with invalid fallback
--FILE--
<?php

var_dump(crypt("test", "$#"));
var_dump(crypt("test", "$5zd$01"));

?>
--EXPECTF--
Warning: crypt(): salt '$#' has the wrong format in %s on line %d
string(2) "*0"

Warning: crypt(): salt '$5zd$01' has the wrong format in %s on line %d
string(2) "*0"
