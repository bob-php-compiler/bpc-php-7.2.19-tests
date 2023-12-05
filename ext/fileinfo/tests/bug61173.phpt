--TEST--
Bug #61173: Unable to detect error from finfo constructor
--FILE--
<?php

try {
    $finfo = new finfo(1, '', false);
    var_dump($finfo);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
--EXPECTF--
Warning: Too many arguments to method finfo::__construct(): 2 at most, 3 provided in %s on line %d
object(finfo)#%d (0) {
}
