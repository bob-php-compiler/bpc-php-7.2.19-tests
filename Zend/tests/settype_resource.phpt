--TEST--
casting different variables to resource using settype()
--FILE--
<?php

$r = fopen('/proc/self/comm', "r");

class test {
	function  __toString() {
		return "10";
	}
}

$o = new test;

$vars = array(
	"string",
	"8754456",
	"",
	"\0",
	9876545,
	0.10,
	array(),
	array(1,2,3),
	false,
	true,
	NULL,
	$r,
	$o
);

foreach ($vars as $var) {
	settype($var, "resource");
	var_dump($var);
}

echo "Done\n";
?>
--EXPECTF--
Warning: settype(): Cannot convert to resource type in %s on line %d
string(6) "string"

Warning: settype(): Cannot convert to resource type in %s on line %d
string(7) "8754456"

Warning: settype(): Cannot convert to resource type in %s on line %d
string(0) ""

Warning: settype(): Cannot convert to resource type in %s on line %d
string(1) " "

Warning: settype(): Cannot convert to resource type in %s on line %d
int(9876545)

Warning: settype(): Cannot convert to resource type in %s on line %d
float(0.1)

Warning: settype(): Cannot convert to resource type in %s on line %d
array(0) {
}

Warning: settype(): Cannot convert to resource type in %s on line %d
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}

Warning: settype(): Cannot convert to resource type in %s on line %d
bool(false)

Warning: settype(): Cannot convert to resource type in %s on line %d
bool(true)

Warning: settype(): Cannot convert to resource type in %s on line %d
NULL

Warning: settype(): Cannot convert to resource type in %s on line %d
resource(%d) of type (stream)

Warning: settype(): Cannot convert to resource type in %s on line %d
object(test)#%d (0) {
}
Done
