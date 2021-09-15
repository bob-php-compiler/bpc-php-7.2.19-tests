--TEST--
GC 030: GC and exceptions in destructors
--INI--
zend.enable_gc=1
--FILE--
<?php
class foo {
    public $foo;

    public function __destruct() {
        throw new Exception("foobar");
    }
}

$f1 = new foo;
$f2 = new foo;
$f1->foo = $f2;
$f2->foo = $f1;
unset($f1, $f2);
gc_collect_cycles();
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: Uncaught Exception: foobar in %sgc_030.php:%d
Stack trace:
#0 %s(%d): foo->__destruct()
#1 {main}

Next Exception: foobar in %sgc_030.php:%d
Stack trace:
#0 %s(%d): foo->__destruct()
#1 {main}
  thrown in %sgc_030.php on line %d
