--TEST--
errmsg: disabled function
--SKIPIF--
skip no ini disable_functions
--INI--
disable_functions=phpinfo
--FILE--
<?php

phpinfo();

echo "Done\n";
?>
--EXPECTF--
Warning: phpinfo() has been disabled for security reasons in %s on line %d
Done
