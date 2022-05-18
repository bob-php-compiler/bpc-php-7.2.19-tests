<?php

if (false !== getenv('PDO_MYSQL_TEST_DSN')) {
	# user set them from their shell
	$config['ENV']['PDOTEST_DSN'] = getenv('PDO_MYSQL_TEST_DSN');
	$config['ENV']['PDOTEST_USER'] = getenv('PDO_MYSQL_TEST_USER');
	$config['ENV']['PDOTEST_PASS'] = getenv('PDO_MYSQL_TEST_PASS');
	if (false !== getenv('PDO_MYSQL_TEST_ATTR')) {
		$config['ENV']['PDOTEST_ATTR'] = getenv('PDO_MYSQL_TEST_ATTR');
	}
} else {
	$config['ENV']['PDOTEST_DSN'] = 'mysql:host=127.0.0.1;dbname=test';
	$config['ENV']['PDOTEST_USER'] = 'rootpw';
	$config['ENV']['PDOTEST_PASS'] = '123456';
}

/* MySQL specific settings */
define('PDO_MYSQL_TEST_ENGINE', (false !== getenv('PDO_MYSQL_TEST_ENGINE')) ? getenv('PDO_MYSQL_TEST_ENGINE') : 'MyISAM');
define('PDO_MYSQL_TEST_HOST', (false !== getenv('PDO_MYSQL_TEST_HOST')) ? getenv('PDO_MYSQL_TEST_HOST') : 'localhost');
define('PDO_MYSQL_TEST_PORT', (false !== getenv('PDO_MYSQL_TEST_PORT')) ? getenv('PDO_MYSQL_TEST_PORT') : NULL);
define('PDO_MYSQL_TEST_DB', (false !== getenv('PDO_MYSQL_TEST_DB')) ? getenv('PDO_MYSQL_TEST_DB') : 'test');
define('PDO_MYSQL_TEST_SOCKET', (false !== getenv('PDO_MYSQL_TEST_SOCKET')) ? getenv('PDO_MYSQL_TEST_SOCKET') : NULL);
define('PDO_MYSQL_TEST_DSN', (false !== getenv('PDO_MYSQL_TEST_DSN')) ? getenv('PDO_MYSQL_TEST_DSN') : $config['ENV']['PDOTEST_DSN']);
define('PDO_MYSQL_TEST_USER', (false !== getenv('PDO_MYSQL_TEST_USER')) ? getenv('PDO_MYSQL_TEST_USER') : $config['ENV']['PDOTEST_USER']);
define('PDO_MYSQL_TEST_PASS', (false !== getenv('PDO_MYSQL_TEST_PASS')) ? getenv('PDO_MYSQL_TEST_PASS') : $config['ENV']['PDOTEST_PASS']);
define('PDO_MYSQL_TEST_CHARSET', (false !== getenv('PDO_MYSQL_TEST_CHARSET')) ? getenv('PDO_MYSQL_TEST_CHARSET') : NULL);
