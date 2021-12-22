--TEST--
Bug #43293 (Multiple segfaults in getopt())
--FILE--
<?php
$_SERVER['argv'] = array(true, false);
var_dump(getopt("abcd"));
?>
--EXPECT--
array(0) {
}
