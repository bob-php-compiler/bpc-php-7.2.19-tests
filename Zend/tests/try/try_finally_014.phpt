--TEST--
Break 2 in try and return in finally inside nested loop
--FILE--
<?php

function foo() {
    $array = array(1, 2, $n = 3);
    foreach ($array as $value) {
        $break = false;
        foreach ($array as $value) {
            try {
                echo "try\n";
                $break = true;
                break;
            } finally {
                echo "finally\n";
                return;
            }
        }
        if ($break) {
            break;
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
