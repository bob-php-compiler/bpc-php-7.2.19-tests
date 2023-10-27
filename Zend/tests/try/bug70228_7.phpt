--TEST--
Bug #70228 (memleak if return in finally block)
--FILE--
<?php

function foo() {
    $array = array(1, 2, $n = 3);
    foreach ($array as $value) {
        var_dump($value);
        try {
            try {
                foreach ($array as $_) {
                    return str_repeat("a", 2);
                }
            } finally {
                throw new Exception;
            }
        } catch (Exception $e) { }
    }
}

foo();
?>
===DONE===
--EXPECT--
int(1)
===DONE===
