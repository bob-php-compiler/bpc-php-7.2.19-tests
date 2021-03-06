--TEST--
Bug #43332.1 (self and parent as type hint)
--FILE--
<?php
// namespace foobar;

class foo {
  public function bar(self $a) { }
}

$foo = new foo;
$foo->bar($foo); // Ok!
$foo->bar(new stdclass); // Error, ok!
--EXPECTF--
Fatal error: Uncaught TypeError: Argument 1 passed to foo::bar() must be an instance of foo, instance of stdClass given, called in %sbug43332_1.php on line 10 and defined in %sbug43332_1.php:5
Stack trace:
#0 %s(%d): foo->bar(Object(stdClass))
#1 {main}
  thrown in %sbug43332_1.php on line 10
