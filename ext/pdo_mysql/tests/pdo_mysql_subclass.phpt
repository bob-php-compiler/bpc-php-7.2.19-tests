--TEST--
MySQL PDOStatement->execute()/fetch(), Non-SELECT
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');

	// No silly strict mode warnings, please!
	error_reporting(E_ALL^E_STRICT);
	ini_set('display_errors', false);

	try {

		class MyPDO extends PDO {

			public function __construct() {
				$this->protocol();
				return call_user_func_array(array($this, 'parent::__construct'), func_get_args());
			}

			public function exec() {
				$this->protocol();
				return call_user_func_array(array($this, 'parent::exec'), func_get_args());
			}

			public function query() {
				$this->protocol();
				return call_user_func_array(array($this, 'parent::query'), func_get_args());
			}

			public function __call($method, $args) {
				print "__call(".var_export($method,true).", ".var_export($args, true).")\n";
				// $this->protocol();
			}

			private function protocol() {
				$stack = debug_backtrace();
				if (!isset($stack[1]))
					return;

				printf("%s(", $stack[1]['function']);
				$args = '';
				foreach ($stack[1]['args'] as $k => $v)
					$args .= sprintf("%s, ", var_export($v, true));
				if ($args != '')
					printf("%s", substr($args, 0, -2));
				printf(")\n");
			}

		}

		$db = new MyPDO(PDO_MYSQL_TEST_DSN, PDO_MYSQL_TEST_USER, PDO_MYSQL_TEST_PASS);
		$db->exec('DROP TABLE IF EXISTS test');
		$db->exec('CREATE TABLE test(id INT)');
		$db->exec('INSERT INTO test(id) VALUES (1), (2)');
		$stmt = $db->query('SELECT * FROM test ORDER BY id ASC');
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
		var_dump($stmt->fetch());
		$db->intercept_call();


	} catch (PDOException $e) {
		printf("[001] %s [%s] %s\n",
			$e->getMessage(), $db->errorCode(), implode(' ', $db->errorInfo()));
	}

	$db->exec('DROP TABLE IF EXISTS test');
	print "done!\n";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
$db = MySQLPDOTest::factory();
$db->exec('DROP TABLE IF EXISTS test');
?>
--EXPECTF--
__construct('%S', '%S', %s)
exec('DROP TABLE IF EXISTS test')
exec('CREATE TABLE test(id INT)')
exec('INSERT INTO test(id) VALUES (1), (2)')
query('SELECT * FROM test ORDER BY id ASC')
array(2) {
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
}
bool(false)
__call('intercept_call', array (
))
exec('DROP TABLE IF EXISTS test')
done!
