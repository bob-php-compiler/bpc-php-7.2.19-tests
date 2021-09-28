--TEST--
unset() CV 4 (unset() local variable in included file)
--ARGS--
--bpc-include-file Zend/tests/unset.inc
--FILE--
<?php
function f() {
  $x = "ok\n";
  echo $x;
  include "unset.inc";
  var_dump($x);
}
f();
?>
--EXPECTF--
ok
NULL
