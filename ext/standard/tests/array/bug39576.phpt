--TEST--
Bug #39576 (array_walk() doesn't separate userdata zval)
--FILE--
<?php

class Test {

	public $_table = '';
	public $_columns = array ();
	public $_primary = array ();

}

$test = new Test ();
$test->name = 'test';
$test->_columns['name'] = new stdClass;

function test ($value, $column, &$columns) {}

$vars = get_object_vars ($test);
array_walk (
	$vars,
	'test',
	$test->_columns
);

var_dump($test);

array_intersect_key (
	get_object_vars ($test),
	$test->_primary
);

echo "Done\n";
?>
--EXPECTF--
object(Test)#%d (4) {
  ["_table"]=>
  string(0) ""
  ["_columns"]=>
  array(1) {
    ["name"]=>
    object(stdClass)#%d (0) {
    }
  }
  ["_primary"]=>
  array(0) {
  }
  ["name"]=>
  string(4) "test"
}
Done
