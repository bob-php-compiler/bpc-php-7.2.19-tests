--TEST--
Bug #69891: Unexpected array comparison result
--FILE--
<?php

var_dump(array(1, 2, 3) <=> array());
var_dump(array() <=> array(1, 2, 3));
var_dump(array(1) <=> array(2, 3));
--EXPECT--
int(1)
int(-1)
int(-1)
