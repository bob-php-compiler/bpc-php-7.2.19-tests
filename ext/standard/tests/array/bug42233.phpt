--TEST--
Bug #42233 (extract(): scandic characters not allowed as variable name)
--FILE--
<?php

$test = array(
	'a'     => '1',
	'æ'     => '2',
	'æøåäö' => '3',
);

var_dump($test);
var_dump(extract($test));
var_dump($a);
$name = 'æ';
var_dump($$name);
$name = 'æøåäö';
var_dump($$name);

echo "Done.\n";
?>
--EXPECT--
array(3) {
  ["a"]=>
  string(1) "1"
  ["æ"]=>
  string(1) "2"
  ["æøåäö"]=>
  string(1) "3"
}
int(1)
string(1) "1"
NULL
NULL
Done.
