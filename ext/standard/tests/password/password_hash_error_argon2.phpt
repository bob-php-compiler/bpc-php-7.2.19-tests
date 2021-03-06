--TEST--
Test error operation of password_hash() with Argon2i and Argon2id
--SKIPIF--
<?php
if (!defined('PASSWORD_ARGON2I')) die('skip password_hash not built with Argon2');
if (!defined('PASSWORD_ARGON2ID')) die('skip password_hash not built with Argon2');
?>
--FILE--
<?php
var_dump(password_hash('test', PASSWORD_ARGON2I, array('memory_cost' => 0)));
var_dump(password_hash('test', PASSWORD_ARGON2I, array('time_cost' => 0)));
var_dump(password_hash('test', PASSWORD_ARGON2I, array('threads' => 0)));
var_dump(password_hash('test', PASSWORD_ARGON2ID, array('memory_cost' => 0)));
var_dump(password_hash('test', PASSWORD_ARGON2ID, array('time_cost' => 0)));
var_dump(password_hash('test', PASSWORD_ARGON2ID, array('threads' => 0)));
?>
--EXPECTF--
Warning: password_hash(): Memory cost is outside of allowed memory range in %s on line %d
NULL

Warning: password_hash(): Time cost is outside of allowed time range in %s on line %d
NULL

Warning: password_hash(): %sthread%s
NULL

Warning: password_hash(): Memory cost is outside of allowed memory range in %s on line %d
NULL

Warning: password_hash(): Time cost is outside of allowed time range in %s on line %d
NULL

Warning: password_hash(): %sthread%s
NULL
