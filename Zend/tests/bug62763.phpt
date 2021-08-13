--TEST--
Bug #62763 (register_shutdown_function and extending class)
--FILE--
<?php
class test1 {
    public function __construct() {
        register_shutdown_function(array($this, 'shutdown'));
    }
    public function shutdown() {
        exit(__METHOD__);
    }
}

class test2 extends test1 {
    public function __destruct() {
       exit (__METHOD__);
    }
}
new test1;
new test2;
?>
--EXPECTF--
Warning: in %s line 12: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

test1::shutdown
