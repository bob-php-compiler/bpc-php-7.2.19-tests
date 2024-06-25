--TEST--
Test DES with invalid fallback
--FILE--
<?php

var_dump(crypt("test", "$#"));
var_dump(crypt("test", "$5zd$01"));

?>
--EXPECTF--
%Astring(2) "*0"
%Astring(2) "*0"
