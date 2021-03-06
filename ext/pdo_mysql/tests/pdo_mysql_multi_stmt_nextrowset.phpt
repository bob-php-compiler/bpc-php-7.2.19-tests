--TEST--
MySQL PDOStatement->nextRowSet() with PDO::MYSQL_ATTR_MULTI_STATEMENTS either true or false
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
$db = MySQLPDOTest::factory();
$row = $db->query('SELECT VERSION() as _version')->fetch(PDO::FETCH_ASSOC);
$matches = array();
if (!preg_match('/^(\d+)\.(\d+)\.(\d+)/ismU', $row['_version'], $matches))
	die(sprintf("skip Cannot determine MySQL Server version\n"));

$version = $matches[0] * 10000 + $matches[1] * 100 + $matches[2];
if ($version < 50000)
	die(sprintf("skip Need MySQL Server 5.0.0+, found %d.%02d.%02d (%d)\n",
		$matches[0], $matches[1], $matches[2], $version));

if (!MySQLPDOTest::isPDOMySQLnd())
	die("skip This will not work with libmysql");
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();
	$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);

	MySQLPDOTest::createTestTable($db);

	function test_proc($db) {

		$db->exec('DROP PROCEDURE IF EXISTS p');
		$db->exec('CREATE PROCEDURE p() BEGIN SELECT id FROM test ORDER BY id ASC LIMIT 3; SELECT id, label FROM test WHERE id < 4 ORDER BY id DESC LIMIT 3; END;');
		$stmt = $db->query('CALL p()');
		do {
			var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
		} while ($stmt->nextRowSet());
		var_dump($stmt->nextRowSet());

	}

	try {

		// Using native PS for proc, since emulated fails.
		printf("Native PS...\n");
		foreach (array(false, true) as $multi) {
			$value = $multi ? 'true' : 'false';
			echo "\nTesting with PDO::MYSQL_ATTR_MULTI_STATEMENTS set to {$value}\n";
			$dsn = MySQLPDOTest::getDSN();
			$user = PDO_MYSQL_TEST_USER;
			$pass = PDO_MYSQL_TEST_PASS;
			$db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_MULTI_STATEMENTS => $multi));
			$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
			$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, 1);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
			test_proc($db);

			$db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_MULTI_STATEMENTS => $multi));
			$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
			$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, 0);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);

			test_proc($db);

			// Switch back to emulated prepares to verify multi statement attribute.
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 1);
			// This will fail when $multi is false.
			$stmt = $db->query("SELECT * FROM test; INSERT INTO test (id, label) VALUES (99, 'x')");
			if ($stmt !== false) {
				$stmt->closeCursor();
			}
			$info = $db->errorInfo();
			var_dump($info[0]);
		}
		@$db->exec('DROP PROCEDURE IF EXISTS p');

	} catch (PDOException $e) {
		printf("[001] %s [%s] %s\n",
			$e->getMessage(), $db->errorCode(), implode(' ', $db->errorInfo()));
	}

	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
MySQLPDOTest::dropTestTable();
?>
--EXPECTF--
Native PS...

Testing with PDO::MYSQL_ATTR_MULTI_STATEMENTS set to false
array(3) {
  [0]=>
  array(1) {
    ["id"]=>
    string(1) "1"
  }
  [1]=>
  array(1) {
    ["id"]=>
    string(1) "2"
  }
  [2]=>
  array(1) {
    ["id"]=>
    string(1) "3"
  }
}
array(3) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "3"
    ["label"]=>
    string(1) "c"
  }
  [1]=>
  array(2) {
    ["id"]=>
    string(1) "2"
    ["label"]=>
    string(1) "b"
  }
  [2]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
bool(false)
array(3) {
  [0]=>
  array(1) {
    ["id"]=>
    string(1) "1"
  }
  [1]=>
  array(1) {
    ["id"]=>
    string(1) "2"
  }
  [2]=>
  array(1) {
    ["id"]=>
    string(1) "3"
  }
}
array(3) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "3"
    ["label"]=>
    string(1) "c"
  }
  [1]=>
  array(2) {
    ["id"]=>
    string(1) "2"
    ["label"]=>
    string(1) "b"
  }
  [2]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
bool(false)
string(5) "42000"

Testing with PDO::MYSQL_ATTR_MULTI_STATEMENTS set to true
array(3) {
  [0]=>
  array(1) {
    ["id"]=>
    string(1) "1"
  }
  [1]=>
  array(1) {
    ["id"]=>
    string(1) "2"
  }
  [2]=>
  array(1) {
    ["id"]=>
    string(1) "3"
  }
}
array(3) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "3"
    ["label"]=>
    string(1) "c"
  }
  [1]=>
  array(2) {
    ["id"]=>
    string(1) "2"
    ["label"]=>
    string(1) "b"
  }
  [2]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
bool(false)
array(3) {
  [0]=>
  array(1) {
    ["id"]=>
    string(1) "1"
  }
  [1]=>
  array(1) {
    ["id"]=>
    string(1) "2"
  }
  [2]=>
  array(1) {
    ["id"]=>
    string(1) "3"
  }
}
array(3) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "3"
    ["label"]=>
    string(1) "c"
  }
  [1]=>
  array(2) {
    ["id"]=>
    string(1) "2"
    ["label"]=>
    string(1) "b"
  }
  [2]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
bool(false)
string(5) "00000"
done!
