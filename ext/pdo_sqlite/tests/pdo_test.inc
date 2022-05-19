<?php
# PDO test framework utilities

if (getenv('PDOTEST_DSN') === false) {
	include 'config.inc';
	foreach($config['ENV'] as $n => $v) {
		putenv("$n=$v");
	}
}

class PDOTest {
	// create an instance of the PDO driver, based on
	// the current environment
	static function factory($classname = 'PDO', $drop_test_tables = true) {
		$dsn = getenv('PDOTEST_DSN');
		$user = getenv('PDOTEST_USER');
		$pass = getenv('PDOTEST_PASS');
		$attr = getenv('PDOTEST_ATTR');
		if (is_string($attr) && strlen($attr)) {
			$attr = unserialize($attr);
		} else {
			$attr = null;
		}

		if ($user === false) $user = NULL;
		if ($pass === false) $pass = NULL;

		$db = new $classname($dsn, $user, $pass, $attr);

		if (!$db) {
			die("Could not create PDO object (DSN=$dsn, user=$user)\n");
		}

		// clean up any crufty test tables we might have left behind
		// on a previous run
		static $test_tables = array(
			'test',
			'test2',
			'classtypes'
			);
		if ($drop_test_tables) {
			foreach ($test_tables as $table) {
				$db->exec("DROP TABLE $table");
			}
		}

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
		return $db;
	}

	static function skip() {
		try {
			$db = PDOTest::factory();
		} catch (PDOException $e) {
			die("skip " . $e->getMessage());
		}
	}
}

function detect_transactional_mysql_engine($db) {
	foreach ($db->query("show variables like 'have%'") as $row) {
		if (!empty($row) && $row[1] == 'YES' && ($row[0] == 'have_innodb' || $row[0] == 'have_bdb')) {
			return str_replace("have_", "", $row[0]);
		}
	}
	/* MySQL 5.6.1+ */
	foreach ($db->query("SHOW ENGINES") as $row) {
		if (isset($row['engine']) && isset($row['support'])) {
			 if ('InnoDB' == $row['engine'] && ('YES' == $row['support'] || 'DEFAULT' == $row['support']))
				return 'innodb';
		}
	}
	return false;
}
