--TEST--
Live range & return from finally
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php
$array = [1];
foreach ([0] as $_) {
    foreach ($array as $v) {
        try {
        	echo "ok\n";
            return;
        } finally {
        	echo "ok\n";
            return;
        }
    }
}
?>
--EXPECT--
ok
ok
