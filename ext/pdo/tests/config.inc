<?php

if (getenv('PDO_MYSQL_TEST_DSN')) {
    $config['ENV']['PDOTEST_DSN'] = getenv('PDO_MYSQL_TEST_DSN');
    $config['ENV']['PDOTEST_USER'] = getenv('PDO_MYSQL_TEST_USER');
    $config['ENV']['PDOTEST_PASS'] = getenv('PDO_MYSQL_TEST_PASS');
    if (false !== getenv('PDO_MYSQL_TEST_ATTR')) {
        $config['ENV']['PDOTEST_ATTR'] = getenv('PDO_MYSQL_TEST_ATTR');
    }
} elseif (getenv('PDO_SQLITE_TEST_DSN')) {
    $config['ENV']['PDOTEST_DSN'] = getenv('PDO_SQLITE_TEST_DSN');
} elseif (getenv('PDO_SQLITE_TEST_DSN_DEFAULT')) {
    $config['ENV']['PDOTEST_DSN'] = 'sqlite::memory:';
} elseif (getenv('PDO_PGSQL_TEST_DSN')) {
    $config['ENV']['PDOTEST_DSN'] = getenv('PDO_PGSQL_TEST_DSN');
    if (false !== getenv('PDO_PGSQL_TEST_ATTR')) {
        $config['ENV']['PDOTEST_ATTR'] = getenv('PDO_PGSQL_TEST_ATTR');
    }
} elseif (getenv('PDO_PGSQL_TEST_DSN_DEFAULT')) {
    $config['ENV']['PDOTEST_DSN'] = 'pgsql:host=127.0.0.1 port=5432 dbname=test user=postgres password=123456';
} elseif (getenv('PDO_OCI_TEST_DSN')) {
    $config['ENV']['PDOTEST_DSN'] = getenv('PDO_OCI_TEST_DSN');
    $config['ENV']['PDOTEST_USER'] = getenv('PDO_OCI_TEST_USER');
    $config['ENV']['PDOTEST_PASS'] = getenv('PDO_OCI_TEST_PASS');
    $config['ENV']['PDOTEST_ATTR'] = getenv('PDO_OCI_TEST_ATTR');
} elseif (getenv('PDO_OCI_TEST_DSN_DEFAULT')) {
    $config['ENV']['PDOTEST_DSN'] = 'oci:dbname=127.0.0.1:1521/orcl;charset=WE8MSWIN1252';
    $config['ENV']['PDOTEST_USER'] = 'hr';
    $config['ENV']['PDOTEST_PASS'] = 'oracle';
} else { // PDO_MYSQL_TEST_DSN_DEFAULT
    $config['ENV']['PDOTEST_DSN'] = 'mysql:host=127.0.0.1;dbname=test';
    $config['ENV']['PDOTEST_USER'] = 'rootpw';
    $config['ENV']['PDOTEST_PASS'] = '123456';
}
