--TEST--
MySQL PDO:query() vs. PDO::prepare() and MySQL error 2050
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
if (MYSQLPDOTest::isPDOMySQLnd())
	die("skip libmysql only test");
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();

	try {

		printf("Native PS...\n");
		$db->setAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY, 0);
		if (0 != $db->getAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY))
			printf("[004] Unable to turn off emulated prepared statements\n");

		printf("Buffered...\n");
		MySQLPDOTest::createTestTable($db);
		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
		$stmt = $db->query('SELECT id, label FROM test WHERE id = 1');
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
		$stmt = $db->query('SELECT id, label FROM test WHERE id = 1');
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		printf("Unbuffered...\n");
		MySQLPDOTest::createTestTable($db);
		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
		$stmt = $db->query('SELECT id, label FROM test WHERE id = 1');
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
		/* bpc close stmt at page end, so bpc will not cause any error.
		NOTE - this will cause an error and it OK
		When using unbuffered prepared statements MySQL expects you to
		fetch all data from the row before sending new data to the server.
		PDO::query() will prepare and execute a statement in one step.
		After the execution of PDO::query(), MySQL expects you to fetch
		the results from the line before sending new commands. However,
		PHP/PDO will send a CLOSE message as part of the PDO::query() call.

		The following happens:

			$stmt = PDO::query(<some query>)
				mysql_stmt_prepare()
				mysql_stmt_execute()

			$stmt->fetchAll()
				mysql_stmt_fetch()

			And now the right side of the expression will be executed first:
				$stmt = PDO::query(<some query>)
					PDO::query(<some query>)
						mysql_stmt_prepare
						mysql_stmt_execute

			PHP continues at the left side of the expression:

				$stmt = PDO::query(<some query>)

					What happens is that $stmt gets overwritten. The reference counter of the
					zval representing the current value of $stmt. PDO gets a callback that
					it has to free the resources associated with the zval representing the
					current value of stmt:
						mysql_stmt_close
							---> ERROR
							---> execute() has been send on the line, you are supposed to fetch
							---> you must not try to send a CLOSE after execute()
							---> Error: 2050 (CR_FETCH_CANCELED)
							---> Message: Row retrieval was canceled by mysql_stmt_close() call
							---> MySQL does its best to recover the line and cancels the retrieval

					PHP proceeds and assigns the new statement object/zval obtained from
					PDO to $stmt.

		Solutions:
				- use mysqlnd
				- use prepare() + execute() instead of query()
				- as there is no explicit close() in PDO, try unset($stmt) before the new assignment
				- fix PDO::query() [not the driver, fix PDO itself]
		*/

		$stmt = $db->query('SELECT id, label FROM test WHERE id = 1');
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$stmt = $db->prepare('SELECT id, label FROM test WHERE id = 1');
		$stmt->execute();
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$stmt = $db->prepare('SELECT id, label FROM test WHERE id = 1');
		$stmt->execute();
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		unset($stmt);
		$stmt = $db->query('SELECT id, label FROM test WHERE id = 1');
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		unset($stmt);
		$stmt = $db->query('SELECT id, label FROM test WHERE id = 1');
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

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
Buffered...
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
Unbuffered...
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
done!
