--TEST--
Test error operation of random_bytes()
--FILE--
<?php

try {
    $bytes = random_bytes();
} catch (TypeError $e) {
    echo $e->getMessage().PHP_EOL;
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function random_bytes(): 1 required, 0 provided in %s on line %d
 -- compile-error
