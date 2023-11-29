--TEST--
Testing get_declared_traits() inside namespace
--FILE--
<?php

class test\a { }
interface test\b { }
trait test\c { }
abstract class test\d { }
final class test\e { }
var_dump(get_declared_traits());

?>
--EXPECTF--
array(%d) {%A
  [%d]=>
  string(6) "test\c"
}
