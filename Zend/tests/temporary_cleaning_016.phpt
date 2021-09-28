--TEST--
Live ranges should be ordered according to "start" position
--SKIPIF--
skip TODO
--FILE--
<?php
set_error_handler(function($no, $msg) { throw new Exception; });

try {
    $a = array();
    $str = "$a${"y$a$a"}y";
} catch (Exception $e) {
}
?>
DONE
--EXPECT--
DONE
