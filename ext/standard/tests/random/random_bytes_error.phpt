--TEST--
Test error operation of random_bytes()
--FILE--
<?php

try {
    $bytes = random_bytes(0);
} catch (Error $e) {
    echo $e->getMessage().PHP_EOL;
}

?>
--EXPECT--
Length must be greater than 0
