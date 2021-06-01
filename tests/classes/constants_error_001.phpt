--TEST--
Error case: duplicate class constant definition
--FILE--
<?php
  class myclass
  {
      const myConst = "hello";
      const myConst = "hello again";
  }
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot redeclare constant myclass::myConst in %s on line 5
 -- compile-error
