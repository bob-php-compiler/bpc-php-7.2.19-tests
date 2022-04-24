--TEST--
Bug #71204 (segfault if clean spl_autoload_funcs while autoloading )
--ARGS--
--bpc-include-file ext/spl/tests/bug71204.inc \
--FILE--
<?php

spl_autoload_register(function ($name) {
	spl_autoload_unregister("spl_autoload_call");
});

spl_autoload_register(function ($name) {
});

new A();
?>
--EXPECTF--
Fatal error: Uncaught Error: Class 'A' not found in %sbug71204.php:%d
Stack trace:
#0 {main}
  thrown in %sbug71204.php on line %d
