--TEST--
Ensure callback methods in unknown classes trigger autoload.
--FILE--
<?php
spl_autoload_register(function ($name) {
  echo "In autoload: ";
  var_dump($name);
});
call_user_func(array("UndefC", "test"));
?>
--EXPECTF--
In autoload: string(6) "UndefC"

Warning: call_user_func() expects parameter 1 to be callable, UndefC::test given in %s on line %d
