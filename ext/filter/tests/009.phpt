--TEST--
filter_id()
--FILE--
<?php

var_dump(filter_id("stripped"));
var_dump(filter_id("string"));
var_dump(filter_id("url"));
var_dump(filter_id("int"));
var_dump(filter_id("none"));
var_dump(filter_id(array()));
var_dump(filter_id(-1));

echo "Done\n";
?>
--EXPECTF--
int(513)
int(513)
int(518)
int(257)
bool(false)

Warning: filter_id() expects parameter 1 to be string, array given in %s on line %d
NULL
bool(false)
Done
