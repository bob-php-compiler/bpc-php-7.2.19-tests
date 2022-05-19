--TEST--
Bug #50728 (All PDOExceptions hardcode 'code' property to 0)
--FILE--
<?php
try {
	$a = new PDO("sqlite:/this/path/should/not/exist.db");
} catch (PDOException $e) {
	var_dump($e->getCode());
}
?>
--EXPECTF--
int(14)
