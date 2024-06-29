--TEST--
pcntl_exec()
--FILE--
<?php
ob_implicit_flush();
echo "ok\n";
pcntl_exec(getenv("TEST_PHP_EXECUTABLE"), ['-n']);
echo "nok\n";
?>
--EXPECT--
Error: No files to compile.
ok
