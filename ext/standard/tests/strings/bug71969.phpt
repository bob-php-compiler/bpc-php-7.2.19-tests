--TEST--
Bug #71969 (str_replace returns an incorrect resulting array after a foreach by reference)
--FILE--
<?php
$a = array(
	array("one" => array("a"=>"0000", "b"=>"1111")),
);

foreach($a as $idx => $record)
{
	$a[$idx]["one"]["a"] = "2222";
}
var_dump(str_replace("2", "3", $a));
?>
--EXPECT--
array(1) {
  [0]=>
  array(1) {
    ["one"]=>
    array(2) {
      ["a"]=>
      string(4) "2222"
      ["b"]=>
      string(4) "1111"
    }
  }
}
