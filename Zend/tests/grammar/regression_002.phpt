--TEST--
Test to ensure ::class still works
--SKIPIF--
skip TODO
--FILE--
<?php

class Foo {}

var_dump(Foo::class);

var_dump(Foo:: class);

var_dump(Foo::	 CLASS);

var_dump(Foo::

CLASS);
--EXPECTF--
string(3) "Foo"
string(3) "Foo"
string(3) "Foo"
string(3) "Foo"
