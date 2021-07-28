--TEST--
Bug #33116 (crash when assigning class name to global variable in __autoload)
--ARGS--
--bpc-include-file Zend/tests/bug33116.inc
--FILE--
<?php
spl_autoload_register(function ($class) {
  $GLOBALS['include'][] = $class;
  include "bug33116.inc";
});

$a = new DefClass;
print_r($a);
print_r($GLOBALS['include']);
?>
--EXPECT--
DefClass Object
(
)
Array
(
    [0] => DefClass
)
