--TEST--
anonymous class trait binding
--SKIPIF--
skip not support anonymous class
--FILE--
<?php
trait TaskTrait {
    function run() {
        return 'Running...';
    }
}
$class = new class() {
  use TaskTrait;
};
var_dump($class->run());
?>
--EXPECTF--
string(10) "Running..."
