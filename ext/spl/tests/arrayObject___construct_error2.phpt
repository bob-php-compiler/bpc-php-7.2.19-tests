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
object(ArrayObject)#2 (1) {
  ["storage":"ArrayObject":private]=>
  object(stdClass)#1 (0) {
  }
}
