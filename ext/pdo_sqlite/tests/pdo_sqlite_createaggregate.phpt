--TEST--
PDO_sqlite: Testing sqliteCreateAggregate()
--FILE--
<?php

$db = new pdo('sqlite::memory:');

$db->query('CREATE TABLE IF NOT EXISTS foobar (id INT AUTO INCREMENT, name TEXT)');

$db->query('INSERT INTO foobar VALUES (NULL, "PHP")');
$db->query('INSERT INTO foobar VALUES (NULL, "PHP6")');

$db->sqliteCreateAggregate('testing', function(&$a, $b) { $a .= $b; return $a; }, function(&$v) { return $v; });


foreach ($db->query('SELECT testing(name) FROM foobar') as $row) {
	var_dump($row);
}

$db->query('DROP TABLE foobar');

?>
--EXPECTF--
array(2) {
  ["testing(name)"]=>
  %string|unicode%(2) "12"
  [0]=>
  %string|unicode%(2) "12"
}
