--TEST--
Cannot use static::FOO in constant expressions
--SKIPIF--
skip define constant
--FILE--
<?php

const C = static::FOO;

?>
--EXPECTF--
Fatal error: "static::" is not allowed in compile-time constants in %s on line %d
