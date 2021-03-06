--TEST--
Bug #24592 (crash when multiple NULL values are being stored)
--INI--
html_errors=0
session.save_handler=files
--FILE--
<?php
@session_start();

$foo = $_SESSION['foo'];
$bar = $_SESSION['bar'];

var_dump($foo, $bar, $_SESSION);

$_SESSION['foo'] = $foo;
$_SESSION['bar'] = $bar;

var_dump($_SESSION);
?>
--EXPECTF--
Notice: Undefined index: foo in %s on line %d

Notice: Undefined index: bar in %s on line %d
NULL
NULL
array(0) {
}
array(2) {
  ["foo"]=>
  NULL
  ["bar"]=>
  NULL
}
