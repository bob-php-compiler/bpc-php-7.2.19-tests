--TEST--
Bug #70228 (memleak if return in finally block)
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php
function test($x) {
    foreach ($x as $v) {
        try {
            return str_repeat("a", 2);
        } finally {
            return 42;
        }
    }
}

var_dump(test([1]));
?>
--EXPECT--
int(42)
