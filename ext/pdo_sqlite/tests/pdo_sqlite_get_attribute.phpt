--TEST--
PDO_sqlite: Testing getAttribute()
--FILE--
<?php

$pdo = new PDO('sqlite::memory:');
var_dump($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));
var_dump($pdo->getAttribute(PDO::ATTR_CLIENT_VERSION));

?>
--EXPECTF--
string(%d) "%s"
string(%d) "%s"
