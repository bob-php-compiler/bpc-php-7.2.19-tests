--TEST--
ZE2 The inherited destructor is called
--FILE--
<?php
class base {
   function __construct() {
      echo __METHOD__ . "\n";
   }

   function __destruct() {
      echo __METHOD__ . "\n";
   }
}

class derived extends base {
}

$obj = new derived;

unset($obj);

echo 'Done';
?>
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

base::__construct
Donebase::__destruct
