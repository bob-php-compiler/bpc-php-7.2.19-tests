--TEST--
Bug #46542 Extending PDO class with a __call() function
--FILE--
<?php
class A extends PDO
{ function __call($m, $p) {print __CLASS__."::$m\n";} }

$a = new A('sqlite:' . getcwd() . '/dummy.db');

$a->truc();
$a->TRUC();

?>
--CLEAN--
<?php
unlink(getcwd() . '/dummy.db');
?>
--EXPECT--
A::truc
A::TRUC
