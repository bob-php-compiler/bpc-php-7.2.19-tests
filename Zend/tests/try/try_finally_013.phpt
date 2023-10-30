--TEST--
Return in try and finally inside loop
--FILE--
<?php

function foo() {
    $array = array(1, 2, $n = 3);
    foreach ($array as $value) {
        try {
            echo "try\n";
            return;
        } finally {
            echo "finally\n";
            return;
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
