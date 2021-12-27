--TEST--
error_get_last() tests
--FILE--
<?php


var_dump(error_get_last());

$b = array();
$a = $b[0];

var_dump(error_get_last());

echo "Done\n";
?>
--EXPECTF--
NULL

Notice: Undefined offset: 0 in %s on line %d
array(4) {
  ["type"]=>
  int(8)
  ["message"]=>
  string(19) "Undefined offset: 0"
  ["file"]=>
  string(%i) "%s"
  ["line"]=>
  int(7)
}
Done
