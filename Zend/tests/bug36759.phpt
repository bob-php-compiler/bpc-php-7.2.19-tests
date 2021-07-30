--TEST--
Bug #36759 (Objects destructors are invoked in wrong order when script is finished)
--FILE--
<?php
class Foo {
  private $bar;
  function __construct($bar) {
    $this->bar = $bar;
  }
  function __destruct() {
    echo __METHOD__,"\n";
    unset($this->bar);
  }
}

class Bar {
  function __destruct() {
    echo __METHOD__,"\n";
    unset($this->bar);
  }
}
$y = new Bar();
$x = new Foo($y);
?>
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 14: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Bar::__destruct
Foo::__destruct
