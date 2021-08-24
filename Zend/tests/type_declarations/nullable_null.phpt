--TEST--
nullable class
--FILE--
<?php

class Foo {}

function test(Foo $a = null) {
	echo "ok\n";
}
test(null);
?>
--EXPECT--
ok
