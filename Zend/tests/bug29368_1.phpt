--TEST--
Bug #29368.1 (The destructor is called when an exception is thrown from the constructor).
--FILE--
<?php
function throwme($arg)
{
    throw new Exception;
}

class foo {
  function __construct() {
    echo "Inside constructor\n";
    throwme($this);
  }

  function __destruct() {
    echo "Inside destructor\n";
  }
}

try {
  $bar = new foo;
} catch(Exception $exc) {
  echo "Caught exception!\n";
}
?>
--EXPECTF--
Warning: in %s line 13: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Inside constructor
Caught exception!
