--TEST--
Fix UMR in array_user_key_compare (MOPB24)
--FILE--
<?php
$arr = array("A" => 1, "B" => 1);

function array_compare(&$key1, &$key2)
  {
    $GLOBALS['a'] = &$key2;
    unset($key2);
    return 1;
  }

uksort($arr, "array_compare");
var_dump($a);

?>
--EXPECTF--
Warning: Parameter 1 to array_compare() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to array_compare() expected to be a reference, value given in %s on line %d
string(1) "B"
