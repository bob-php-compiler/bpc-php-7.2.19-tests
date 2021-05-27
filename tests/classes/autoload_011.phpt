--TEST--
Ensure extends does trigger autoload.
--ARGS--
--bpc-include-file tests/classes/UndefBase.inc
--FILE--
<?php
spl_autoload_register(function ($name) {
  echo "In autoload: ";
  var_dump($name);
});

class C extends UndefBase
{
}
?>
--EXPECTF--
In autoload: string(9) "UndefBase"

Fatal error: Class 'UndefBase' not found in %s on line %d
