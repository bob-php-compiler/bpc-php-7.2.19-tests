--TEST--
php://fd wrapper: mode is ignored
--FILE--
<?php
$f = fopen("php://fd/1", "rkkk");
fwrite($f, "hi!");

echo "\nDone.\n";
--EXPECTF--
Warning: fopen(php://fd/1): failed to open stream: Invalid argument in %s on line 2

Warning: fwrite() expects parameter 1 to be resource, boolean given in %s on line 3

Done.
