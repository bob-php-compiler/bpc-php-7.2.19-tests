--TEST--
PDO Common: PDOStatement::setFetchMode
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

$db->exec('CREATE TABLE test(id int NOT NULL PRIMARY KEY, val VARCHAR(10), grp VARCHAR(10))');
$db->exec('INSERT INTO test VALUES(1, \'A\', \'Group1\')');
$db->exec('INSERT INTO test VALUES(2, \'B\', \'Group2\')');

$SELECT = 'SELECT val, grp FROM test';

$stmt = $db->query($SELECT, PDO::FETCH_NUM);
var_dump($stmt->fetchAll());

class Test
{
	function __construct($name = 'N/A')
	{
		echo __METHOD__ . "($name)\n";
	}
}

unset($stmt);

$stmt = $db->query($SELECT, PDO::FETCH_CLASS, 'Test');
var_dump($stmt->fetchAll());

unset($stmt);

$stmt = $db->query($SELECT, PDO::FETCH_NUM);
$stmt->setFetchMode(PDO::FETCH_CLASS, 'Test', array('Changed'));
var_dump($stmt->fetchAll());

?>
--EXPECTF--
array(2) {
  [0]=>
  array(2) {
    [0]=>
    string(1) "A"
    [1]=>
    string(6) "Group1"
  }
  [1]=>
  array(2) {
    [0]=>
    string(1) "B"
    [1]=>
    string(6) "Group2"
  }
}
Test::__construct(N/A)
Test::__construct(N/A)
array(2) {
  [0]=>
  object(Test)#%d (2) {
    ["val"]=>
    string(1) "A"
    ["grp"]=>
    string(6) "Group1"
  }
  [1]=>
  object(Test)#%d (2) {
    ["val"]=>
    string(1) "B"
    ["grp"]=>
    string(6) "Group2"
  }
}
Test::__construct(Changed)
Test::__construct(Changed)
array(2) {
  [0]=>
  object(Test)#%d (2) {
    ["val"]=>
    string(1) "A"
    ["grp"]=>
    string(6) "Group1"
  }
  [1]=>
  object(Test)#%d (2) {
    ["val"]=>
    string(1) "B"
    ["grp"]=>
    string(6) "Group2"
  }
}
