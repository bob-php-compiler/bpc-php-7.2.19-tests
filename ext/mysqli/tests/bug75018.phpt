--TEST--
Bug #75018 Data corruption when reading fields of bit type
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
require_once("connect.inc");

$mysqli = new mysqli($host, $user, $passwd, $db);

$tbl = "test_bug75018";
$sql = "DROP TABLE IF EXISTS $tbl";
$mysqli->query($sql);

$sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
$mysqli->query($sql);

$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
$mysqli->query($sql);
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
$mysqli->query($sql);

$sql = "SELECT bit_column_1 FROM $tbl";
$result = $mysqli->query($sql);

while ($row = $result->fetch_assoc()) {
	var_dump($row['bit_column_1']);
}

?>
==DONE==
--EXPECT--
string(1) "0"
string(4) "1365"
==DONE==
