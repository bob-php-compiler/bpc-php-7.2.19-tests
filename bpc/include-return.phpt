--TEST--
include return test
--ARGS--
--bpc-include-file bpc/include-return-empty.inc \
--bpc-include-file bpc/include-return-array.inc \
--bpc-include-file bpc/include-return-foreach.inc \
--bpc-include-file bpc/include-return-class.inc \
--bpc-include-file bpc/include-return-function.inc \
--bpc-include-file bpc/include-return-value.inc \
--FILE--
<?php

var_dump(include __DIR__ . '/include-return-empty.inc');
var_dump(include __DIR__ . '/include-return-array.inc');
var_dump(include __DIR__ . '/include-return-foreach.inc');
var_dump(include __DIR__ . '/include-return-class.inc');
var_dump(include __DIR__ . '/include-return-function.inc');
var_dump(include __DIR__ . '/include-return-value.inc');

?>
--EXPECT--
int(1)
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
int(1)
int(1)
int(1)
bool(true)
