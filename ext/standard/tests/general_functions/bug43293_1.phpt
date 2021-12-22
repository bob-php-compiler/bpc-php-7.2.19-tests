--TEST--
Bug #43293 (Multiple segfaults in getopt())
--FILE--
<?php
$_SERVER['argv'] = array(1, 2, 3);
var_dump(getopt("abcd"));
var_dump($_SERVER['argv']);
$_SERVER['argv'] = null;
var_dump(getopt("abcd"));
?>
--EXPECT--
array(0) {
}
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
bool(false)
