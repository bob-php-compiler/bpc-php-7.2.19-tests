--TEST--
Bug #67917: Using GMP objects with overloaded operators can cause memory exhaustion
--FILE--
<?php

$gc = false;
$mem1 = memory_get_usage();
for ($i = 0; $i < 10000; $i++) {
    $gmp = gmp_init(42);
    $gmp <<= 1;
    $mem2 = memory_get_usage();
    if ($mem2 >= $mem1) {
        $mem1 = $mem2;
    } else {
        $gc = true;
    }
}
var_dump($gc);

?>
--EXPECT--
bool(true)
