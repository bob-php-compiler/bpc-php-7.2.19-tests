--TEST--
Bug #62836 (Seg fault or broken object references on unserialize())
--SKIPIF--
skip no ini unserialize_callback_func
--FILE--
<?php
$serialized_object='O:1:"A":4:{s:1:"b";O:1:"B":0:{}s:2:"b1";r:2;s:1:"c";O:1:"B":0:{}s:2:"c1";r:4;}';

ini_set('unserialize_callback_func','mycallback');

function mycallback($classname) {
    unserialize("i:4;");
    eval ("class $classname {} ");
}

print_r(unserialize($serialized_object));
echo "okey";
?>
--EXPECT--
A Object
(
    [b] => B Object
        (
        )

    [b1] => B Object
        (
        )

    [c] => B Object
        (
        )

    [c1] => B Object
        (
        )

)
okey
