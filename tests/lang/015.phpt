--TEST--
Testing include
--ARGS--
--bpc-include-file tests/lang/015.inc
--FILE--
<?php
include "015.inc";
?>
--EXPECT--
Hello
