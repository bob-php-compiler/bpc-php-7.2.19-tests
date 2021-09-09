--TEST--
class constants as default function arguments
--ARGS--
--bpc-include-file Zend/tests/class_constants_002-1.inc
--FILE--
<?php

function bar($b = NoSuchClass::val) {
	var_dump($b);
}

bar(10);
bar();

echo "Done\n";
?>
--EXPECTF--
Fatal error: Uncaught Error: Class 'NoSuchClass' not found in %sclass_constants_002-1.php:0
Stack trace:
#0 {main}
  thrown in %sclass_constants_002-1.php on line 0
