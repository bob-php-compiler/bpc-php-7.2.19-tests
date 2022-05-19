--TEST--
PDO Common: Bug #52098 Own PDOStatement implementation ignore __call()
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';
$db = PDOTest::factory();

@$db->exec("DROP TABLE test");
$db->exec("CREATE TABLE test (x int)");
$db->exec("INSERT INTO test VALUES (1)");

class MyStatement extends PDOStatement
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name'" . implode(', ', $arguments). "\n";
    }
}
/*
Test prepared statement with PDOStatement class.
*/
$derived = $db->prepare('SELECT * FROM test', array(PDO::ATTR_STATEMENT_CLASS=>array('MyStatement')));
$derived->execute();
$derived->foo();
$derived->fetchAll();
$derived = null;

/*
Test regular statement with PDOStatement class.
*/
$db->setAttribute(PDO::ATTR_STATEMENT_CLASS, array('MyStatement'));
$r =  $db->query('SELECT * FROM test');
echo $r->bar();
$r->fetchAll();
$r = null;

/*
Test object instance of PDOStatement class.
*/
$obj = new MyStatement;
echo $obj->lucky();

$db->exec("DROP TABLE test");
?>
===DONE===
--EXPECTF--
Calling object method 'foo'
Calling object method 'bar'
Calling object method 'lucky'
===DONE===
