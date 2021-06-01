--TEST--
Error case: class constant as an encapsed containing a variable
--FILE--
<?php
  class myclass
  {
      const myConst = "$myVar";
  }
?>
--EXPECTF--
parse error (unexpected token `dot') in %s on line %d
