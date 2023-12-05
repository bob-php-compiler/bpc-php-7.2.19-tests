--TEST--
SPL: ArrayObject::__construct with too many arguments.
--FILE--
<?php
echo "Too many arguments:\n";

try {
  var_dump(new ArrayObject(new stdClass, 0, "ArrayIterator", "extra"));
} catch (TypeError $e) {
  echo $e->getMessage() . "(" . $e->getLine() .  ")\n";
}
?>
--EXPECTF--
Too many arguments:

Warning: Too many arguments to method ArrayObject::__construct(): 3 at most, 4 provided in %s on line %d
object(ArrayObject)#2 (1) {
  ["storage":"ArrayObject":private]=>
  object(stdClass)#1 (0) {
  }
}
