--TEST--
Test constants with default values based on other constants.
--FILE--
<?php
  class C
  {
      const BASE_CONST = 'hello';
      const CONST_1 = self::BASE_CONST;
      const CONST_2 = self::CONST_1;
  }
  var_dump(C::CONST_1, C::CONST_2);
?>
--EXPECTF--
string(5) "hello"
string(5) "hello"
