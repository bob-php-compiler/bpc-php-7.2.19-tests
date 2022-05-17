--TEST--
PDO Common: Bug #44409 (PDO::FETCH_SERIALIZE calls __construct())
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require 'pdo_test.inc';
$db = PDOTest::factory();

$db->exec("CREATE TABLE test (dat varchar(100))");
$db->exec("INSERT INTO test (dat) VALUES ('Data from DB')");

class bug44409 implements Serializable
{
	public function __construct()
	{
		printf("Method called: %s()\n", __METHOD__);
	}

	public function serialize()
	{
		return "any data from serizalize()";
	}

	public function unserialize($dat)
	{
		printf("Method called: %s(%s)\n", __METHOD__, var_export($dat, true));
	}
}

$stmt = $db->query("SELECT * FROM test");

print_r($stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_SERIALIZE, "bug44409"));

?>
--EXPECT--
Method called: bug44409::unserialize('Data from DB')
Array
(
    [0] => bug44409 Object
        (
        )

)
