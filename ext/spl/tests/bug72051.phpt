--TEST--
Bug #72051 (The reference in CallbackFilterIterator doesn't work as expected)
--FILE--
<?php

$data = array(
	array(1,2)
);

$callbackTest = new CallbackFilterIterator(new ArrayIterator($data), function ($current, $key, $iterator) {
    $iterator[$key]['message'] = 'Test message';
	return true;
});

$callbackTest->rewind();
$callbackTest->current();
$callbackTest->next();
var_dump($callbackTest->getInnerIterator());
?>
--EXPECT--
object(ArrayIterator)#1 (1) {
  ["storage":"ArrayIterator":private]=>
  array(1) {
    [0]=>
    array(3) {
      [0]=>
      int(1)
      [1]=>
      int(2)
      ["message"]=>
      string(12) "Test message"
    }
  }
}
