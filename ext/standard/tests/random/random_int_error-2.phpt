--TEST--
Test error operation of random_int()
--FILE--
<?php

try {
    $randomInt = random_int(42);
} catch (TypeError $e) {
    echo $e->getMessage().PHP_EOL;
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function random_int(): 2 required, 1 provided in %s on line %d
 -- compile-error
