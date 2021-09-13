--TEST--
Self-referencing constant expression (part of a constant AST)
--FILE--
<?php
class A {
   const FOO = array(self::BAR);
   const BAR = array(self::FOO);
}
var_dump(A::FOO);
?>
--EXPECTF--
Fatal error: Uncaught Error: Undefined class constant 'BAR' in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
