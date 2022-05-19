--TEST--
PDO Common: Bug #61292 (Segfault while calling a method on an overloaded PDO object)
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';

class Database_SQL extends PDO
{
	function __construct()
	{
                $dsn = getenv('PDOTEST_DSN');
                $user = getenv('PDOTEST_USER');
                $pass = getenv('PDOTEST_PASS');

                if ($user === false) $user = NULL;
                if ($pass === false) $pass = NULL;
		$options = array(PDO::ATTR_PERSISTENT => TRUE);

		parent::__construct($dsn, $user, $pass, $options);
	}

	var $bar = array();

	public function foo()
	{
		var_dump($this->bar);
	}
}

(new Database_SQL)->foo();
?>
--EXPECTF--
array(0) {
}
