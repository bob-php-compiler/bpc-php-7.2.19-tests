--TEST--
Foreach loop tests - modifying the array during the loop.
--FILE--
<?php

echo "\nDirectly changing array values.\n";
$a = array("original.1","original.2","original.3");
foreach ($a as $k=>$v) {
	$a[$k]="changed.$k";
	var_dump($v);
}
var_dump($a);

echo "\nModifying the foreach \$value.\n";
$a = array("original.1","original.2","original.3");
foreach ($a as $k=>$v) {
	$v="changed.$k";
}
var_dump($a);

echo "\nPushing elements onto an unreferenced array.\n";
$a = array("original.1","original.2","original.3");
$counter=0;
foreach ($a as $v) {
	array_push($a, "new.$counter");

	//avoid infinite loop if test is failing
    if ($counter++>10) {
    	echo "Loop detected\n";
    	break;
    }
}
var_dump($a);

echo "\nPopping elements off an unreferenced array.\n";
$a = array("original.1","original.2","original.3");
foreach ($a as $v) {
	array_pop($a);
	var_dump($v);
}
var_dump($a);

?>
--EXPECT--
Directly changing array values.
string(10) "original.1"
string(10) "original.2"
string(10) "original.3"
array(3) {
  [0]=>
  string(9) "changed.0"
  [1]=>
  string(9) "changed.1"
  [2]=>
  string(9) "changed.2"
}

Modifying the foreach $value.
array(3) {
  [0]=>
  string(10) "original.1"
  [1]=>
  string(10) "original.2"
  [2]=>
  string(10) "original.3"
}

Pushing elements onto an unreferenced array.
array(6) {
  [0]=>
  string(10) "original.1"
  [1]=>
  string(10) "original.2"
  [2]=>
  string(10) "original.3"
  [3]=>
  string(5) "new.0"
  [4]=>
  string(5) "new.1"
  [5]=>
  string(5) "new.2"
}

Popping elements off an unreferenced array.
string(10) "original.1"
string(10) "original.2"
string(10) "original.3"
array(0) {
}
