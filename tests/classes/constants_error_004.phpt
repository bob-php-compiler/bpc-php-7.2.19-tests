--TEST--
Class constant whose initial value references a non-existent class
--FILE--
<?php
  class C
  {
      const c1 = D::hello;
  }

  $a = new C();
?>
--EXPECTF--
Error: problem running command 'bigloo', exit status 255
Rerunning with -v[234] may provide more information.
