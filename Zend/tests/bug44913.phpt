--TEST--
Bug #44913 (Segfault when using return in combination with nested loops and continue 2)
--FILE--
<?php
function something() {
        foreach(array(1, 2) as $value) {
                echo $value, "\n";
                $continueForeach = false;
                for($i = 0; $i < 1; $i++) {
                    $continueForeach = true;
                    break;
                }
                if ($continueForeach) {
                    continue;
                }
                return;
        }
}
something();
echo "ok\n";
?>
--EXPECT--
1
2
ok
