--TEST--
Bug #68652 (segmentation fault in destructor)
--FILE--
<?php
class Foo {

    private static $instance;
    public static function getInstance() {
        if (isset(self::$instance)) {
            return self::$instance;
        }
        return self::$instance = new self();
    }

    public function __destruct() {
        Bar::getInstance();
    }
}

class Bar {

    private static $instance;
    public static function getInstance() {
        if (isset(self::$instance)) {
            return self::$instance;
        }
        return self::$instance = new self();
    }

    public function __destruct() {
        if (!isset(self::$instance)) return;
        Foo::getInstance();
    }
}


$foo = new Foo();
?>
OK
--EXPECTF--
Warning: in %s line 12: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 27: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

OK
