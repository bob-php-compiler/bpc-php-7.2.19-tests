--TEST--
Testing user-defined function in included file
--ARGS--
--bpc-include-file tests/lang/016.inc
--FILE--
<?php
include "016.inc";
MyFunc("Hello");
?>
--EXPECT--
Hello
