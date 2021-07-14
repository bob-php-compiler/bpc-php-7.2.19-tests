--TEST--
closure binding to anonymous class
--SKIPIF--
skip not support anonymous class
--FILE--
<?php
$class = new class {};
$foo = function() {
    return $this;
};

$closure = Closure::bind($foo, $class, $class);
var_dump($closure());
?>
--EXPECTF--
object(class@anonymous)#1 (0) {
}
