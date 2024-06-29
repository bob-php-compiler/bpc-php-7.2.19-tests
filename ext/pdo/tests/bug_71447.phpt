--TEST--
PDO Common: Bug #71447 (Quotes inside comments not properly handled)
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
$db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
$db->setAttribute (PDO::ATTR_EMULATE_PREPARES, false);
$db->exec('CREATE TABLE test(id int)');
$db->exec('INSERT INTO test VALUES(1)');

// Comment without quotes or placeholders
$stmt = $db->prepare("
	SELECT -- Thats all folks!
		'\"abc\":8000'
	FROM test
");

$stmt->execute();
var_dump($stmt->fetchColumn());

// Comment and placeholder within a string
$stmt = $db->prepare("
	SELECT
		'\"abc\":8001 -- Wat?'
	FROM test
");

$stmt->execute();
var_dump($stmt->fetchColumn());

// Comment with single quote
$stmt = $db->prepare("
	SELECT -- That's all folks!
		'\"abc\":8002'
	FROM test
");

$stmt->execute();
var_dump($stmt->fetchColumn());

// C-Style comment with single quote
$stmt = $db->prepare("
	SELECT /* That's all folks! */
		'\"abc\":8003'
	FROM test
");

$stmt->execute();
var_dump($stmt->fetchColumn());

// Comment with double quote
$stmt = $db->prepare("
	SELECT -- Is it only \"single quotes?
		'\"abc\":8004'
	FROM test
");

$stmt->execute();
var_dump($stmt->fetchColumn());

// Comment with ? placeholder
$stmt = $db->prepare("
	SELECT -- What about question marks here?
		*
	FROM test
	WHERE id = ?
");

$stmt->execute([1]);
var_dump($stmt->fetchColumn());

// Comment with named placeholder
$stmt = $db->prepare("
	SELECT -- What about placeholders :bar
		*
	FROM test
	WHERE id = :id
");

$stmt->execute(['id' => 1]);
var_dump($stmt->fetchColumn());


?>
--EXPECT--
string(10) ""abc":8000"
string(18) ""abc":8001 -- Wat?"
string(10) ""abc":8002"
string(10) ""abc":8003"
string(10) ""abc":8004"
string(1) "1"
string(1) "1"
