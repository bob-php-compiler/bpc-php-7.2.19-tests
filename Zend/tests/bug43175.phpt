--TEST--
Bug #43175 (__destruct() throwing an exception with __call() causes segfault)
--FILE--
<?php

class foobar {
    public function __destruct() {
        throw new Exception();
    }
    public function __call($m, $a) {
        return $this;
    }
}
function foobar() {
    return new foobar();
}
try {
    foobar()->unknown();
} catch (Exception $e) {
    echo "__call via traditional factory should be caught\n";
}
?>
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: Uncaught Exception in %sbug43175.php:5
Stack trace:
#0 %sbug43175.php(19): foobar->__destruct()
#1 {main}
  thrown in %sbug43175.php on line 19
