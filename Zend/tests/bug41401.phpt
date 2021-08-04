--TEST--
Bug #41401 (wrong precedence for unary minus)
--SKIPIF--
skip TODO
--FILE--
<?php
echo 1/-2*5;
echo "\n";
echo 6/+2*-3;
--EXPECT--
-2.5
-9
