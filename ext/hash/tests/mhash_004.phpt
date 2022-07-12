--TEST--
mhash() modifying algorithm parameter
--FILE--
<?php

$algo = MHASH_MD5;
var_dump($algo);
var_dump(bin2hex(mhash($algo, "test")));
var_dump($algo);

?>
--EXPECT--
int(1)
string(32) "098f6bcd4621d373cade4e832627b4f6"
int(1)
