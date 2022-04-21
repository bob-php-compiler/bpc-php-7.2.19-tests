--TEST--
SPL: RecursiveTreeIterator::setPrefixPart() Test arguments
--CREDITS--
Roshan Abraham (roshanabrahams@gmail.com)
TestFest London May 2009
--FILE--
<?php

$arr = array(
 "a" => array("b")
);

$it = new RecursiveArrayIterator($arr);
$it = new RecursiveTreeIterator($it);

try {
    $it->setPrefixPart(1); // Should throw a warning as setPrefixPart expects 2 arguments
} catch (ArgumentCountError $e) {
    echo "Error: ", $e->getMessage(), "\n";
}

$a = new stdClass();
$it->setPrefixPart($a, 1); // Should throw a warning as setPrefixPart expects argument 1 to be long integer

$it->setPrefixPart(1, $a); // Should throw a warning as setPrefixPart expects argument 2 to be a string


?>
===DONE===
--EXPECTF--
Error: Too few arguments to method RecursiveTreeIterator::setPrefixPart(): 2 required, 1 provided

Warning: RecursiveTreeIterator::setPrefixPart() expects parameter 1 to be integer, object given in %s on line %d

Warning: RecursiveTreeIterator::setPrefixPart() expects parameter 2 to be string, object given in %s on line %d
===DONE===
