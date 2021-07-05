--TEST--
get_included_files() tests
--ARGS--
--bpc-include-file Zend/tests/014.inc
--FILE--
<?php

var_dump(get_included_files());

include(dirname(__FILE__)."/014.inc");
var_dump(get_included_files());

include_once(dirname(__FILE__)."/014.inc");
var_dump(get_included_files());

include(dirname(__FILE__)."/014.inc");
var_dump(get_included_files());

echo "Done\n";
?>
--EXPECTF--
array(1) {
  [0]=>
  string(%d) "%s"
}
array(2) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(%d) "%s"
}
array(2) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(%d) "%s"
}
array(2) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(%d) "%s"
}
Done
