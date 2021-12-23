--TEST--
Test error operation of random_int()
--FILE--
<?php

try {
    $randomInt = random_int(42,0);
} catch (Error $e) {
    echo $e->getMessage().PHP_EOL;
}

?>
--EXPECT--
Minimum value must be less than or equal to the maximum value
