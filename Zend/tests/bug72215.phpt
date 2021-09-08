--TEST--
Bug #72215 (Wrong return value if var modified in finally)
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php
function test() {
    $a = 1;
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
var_dump(test());
?>
--EXPECT--
int(1)
