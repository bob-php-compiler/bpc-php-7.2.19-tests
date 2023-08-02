--TEST--
Unpack arguments for new expression
--FILE--
<?php

class Foo {
    public function __construct(...$args) {
        var_dump($args);
    }
}

new Foo(...array());
new Foo(...array(1, 2, 3));
new Foo(...array(1), ...array(), ...array(2, 3));

?>
--EXPECT--
array(0) {
}
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
