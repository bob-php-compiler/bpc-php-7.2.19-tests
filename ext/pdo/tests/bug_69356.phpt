--TEST--
PDO Common: Bug #69356 (PDOStatement::debugDumpParams() truncates query)
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

$db = PDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$query = <<<SQL
SELECT '
    Dumps the information contained by a prepared statement directly on the output. It will provide the SQL query in use, the number of parameters used (Params), the list of parameters, with their name, type (paramtype) as an integer, their key name or position, and the position in the query (if this is supported by the PDO driver, otherwise, it will be -1).
    This is a debug function, which dump directly the data on the normal output.
    Tip:
    As with anything that outputs its result directly to the browser, the output-control functions can be used to capture the output of this function, and save it in a string (for example).
    This will only dumps the parameters in the statement at the moment of the dump. Extra parameters are not stored in the statement, and not displayed.
'
SQL;

switch ($db->getAttribute(PDO::ATTR_DRIVER_NAME)) {
    case 'oci':
        $query .= ' FROM DUAL';
        break;
    case 'firebird':
        $query .= ' FROM RDB$DATABASE';
        break;
}

$stmt = $db->query($query);
var_dump($stmt->debugDumpParams());
?>
--EXPECTF--
SQL: [%s] SELECT '
    Dumps the information contained by a prepared statement directly on the output. It will provide the SQL query in use, the number of parameters used (Params), the list of parameters, with their name, type (paramtype) as an integer, their key name or position, and the position in the query (if this is supported by the PDO driver, otherwise, it will be -1).
    This is a debug function, which dump directly the data on the normal output.
    Tip:
    As with anything that outputs its result directly to the browser, the output-control functions can be used to capture the output of this function, and save it in a string (for example).
    This will only dumps the parameters in the statement at the moment of the dump. Extra parameters are not stored in the statement, and not displayed.
'%S
Params:  0
NULL
