--TEST--
include() a file from the current script directory
--ARGS--
--bpc-include-file tests/lang/inc.inc
--FILE--
<?php
include("inc.inc");
?>
--EXPECT--
Included!
