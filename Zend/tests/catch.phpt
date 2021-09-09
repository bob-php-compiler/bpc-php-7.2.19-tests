--TEST--
catch shouldn't call __autoload
--ARGS--
--bpc-include-file Zend/tests/catch.inc
--FILE--
<?php

spl_autoload_register(function ($name) {
	echo("AUTOLOAD '$name'\n");
});

try {
} catch (A $e) {
}

try {
  throw new Exception();
} catch (B $e) {
} catch (Exception $e) {
	echo "ok\n";
}
?>
--EXPECT--
ok
