--TEST--
Live range & return from finally
--FILE--
<?php
$array = array(1);
foreach (array(0) as $_) {
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
