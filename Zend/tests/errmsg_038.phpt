--TEST--
errmsg: properties cannot be final
--FILE--
<?php

class test {
	final $var = 1;
}

echo "Done\n";
?>
--EXPECTF--
Parse error: Properties cannot be declared final in %s on line %d
