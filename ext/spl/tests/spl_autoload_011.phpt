--TEST--
SPL: spl_autoload() and object freed
--INI--
include_path=.
--FILE--
<?php
class A {
    public $var = 1;
    public function autoload($class) {
        echo "var:".$this->var."\n";
    }
    public function __destruct() {
        echo "__destruct__\n";
    }
}

$a = new A;
$a->var = 2;

spl_autoload_register(array($a, 'autoload'));
unset($a);

var_dump(class_exists("C", true));
?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

var:2
bool(false)
===DONE===
__destruct__
