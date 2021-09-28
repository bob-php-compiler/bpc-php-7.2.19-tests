--TEST--
Bug #72213 (Finally leaks on nested exceptions)
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php
function test() {
    try {
        throw new Exception(1);
    } finally {
        try {
            try {
                throw new Exception(2);
            } finally {
            }
        } catch (Exception $e) {
        }
    }
}

try {
    test();
} catch (Exception $e) {
    echo "caught {$e->getMessage()}\n";
}
--EXPECT--
caught 1
