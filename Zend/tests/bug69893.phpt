--TEST--
Bug #69893: Strict comparison between integer and empty string keys crashes
--FILE--
<?php
var_dump(array(0 => 0) === array("" => 0));
?>
--EXPECT--
bool(false)
