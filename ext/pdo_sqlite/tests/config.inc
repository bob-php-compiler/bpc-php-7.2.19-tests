<?php

if (false !== getenv('PDO_SQLITE_TEST_DSN')) {
	# user set them from their shell
	$config['ENV']['PDOTEST_DSN'] = getenv('PDO_SQLITE_TEST_DSN');
} else {
	$config['ENV']['PDOTEST_DSN'] = 'sqlite::memory:';
}
