--TEST--
Bug #69419: Returning compatible sub generator produces a warning
--SKIPIF--
skip not supported return reference from function/method
--FILE--
<?php

function & genRefInner() {
    $var = 1;
    yield $var;
}

function & genRefOuter() {
    return genRefInner();
}

foreach(genRefOuter() as $i) {
    var_dump($i);
}

?>
--EXPECTF--
Notice: Only variable references should be returned by reference in %s on line %d
int(1)
