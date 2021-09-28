--TEST--
unset() CV 3 (unset() global variable in included file)
--ARGS--
--bpc-include-file Zend/tests/unset.inc
--FILE--
<?php
$x = "ok\n";
echo $x;
include "unset.inc";
var_dump($x);
?>
--EXPECTF--
ok
NULL
