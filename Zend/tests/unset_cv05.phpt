--TEST--
unset() CV 5 (indirect unset() of global variable in session_start())
--INI--
session.auto_start=0
session.save_handler=files
--SKIPIF--
skip TODO session
--FILE--
<?php
$_SESSION = "ok\n";
session_start();
echo $_SESSION;
echo "\nok\n";
?>
--EXPECTF--
Notice: Array to string conversion in %sunset_cv05.php on line %d
Array
ok
