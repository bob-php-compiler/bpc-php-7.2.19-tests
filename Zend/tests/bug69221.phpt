--TEST--
Bug #69221: Segmentation fault when using a generator in combination with an Iterator
--FILE--
<?php

function gen() {
	yield 1;
};

$gen1 = gen();
$gen2 = (object) $gen1;

foreach ($gen1 as $v1) {
    $break = false;
    foreach ($gen2 as $v2) {
        $break = true;
        break;
    }
    if ($break) {
        break;
    }
}

unset($gen1);
foreach ($gen2 as $v) { var_dump($v); }

?>
--EXPECTF--
int(1)
