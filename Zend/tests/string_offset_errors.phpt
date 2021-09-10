--TEST--
Some string offset errors
--FILE--
<?php

try {
    $str = "foo";
    $str[0] =& $str[1];
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECT--
Cannot create references to/from string offsets
