--TEST--
Bug #77993 (Wrong parse error for invalid hex literal on Windows)
--FILE--
<?php
0xg10;
--EXPECTF--
Parse error: %s in %s on line %d
