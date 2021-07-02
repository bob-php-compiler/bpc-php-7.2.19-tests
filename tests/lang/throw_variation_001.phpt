--TEST--
Catching an exception thrown from an included file
--ARGS--
--bpc-include-file tests/lang/inc_throw.inc
--FILE--
<?php

try {
	include "inc_throw.inc";
} catch (Exception $e) {
	echo "caught exception\n";
}

?>
--EXPECT--
caught exception
