--TEST--
error_clear_last() tests
--FILE--
<?php

var_dump(error_get_last());
error_clear_last();
var_dump(error_get_last());

$b = array();
@$a = $b[0];

var_dump(error_get_last());
error_clear_last();
var_dump(error_get_last());

echo "Done\n";
?>
--EXPECTF--
NULL
NULL
array(4) {
  ["type"]=>
  int(8)
  ["message"]=>
  string(19) "Undefined offset: 0"
  ["file"]=>
  string(%d) "%s"
  ["line"]=>
  int(%d)
}
NULL
Done
