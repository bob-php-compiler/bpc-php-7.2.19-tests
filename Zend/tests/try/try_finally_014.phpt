--TEST--
Break 2 in try and return in finally inside nested loop
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php

function foo() {
    $array = [1, 2, $n = 3];
    foreach ($array as $value) {
        foreach ($array as $value) {
            try {
                echo "try\n";
                break 2;
            } finally {
                echo "finally\n";
                return;
            }
        }
    }
}

foo();
?>
===DONE===
--EXPECT--
try
finally
===DONE===
