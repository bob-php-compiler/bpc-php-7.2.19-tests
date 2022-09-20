--TEST--
Bug #73337 (try/catch not working with two exceptions inside a same operation)
--FILE--
<?php
class d { function __destruct() { throw new Exception; } }
try { new d + new d; } catch (Exception $e) { print "Exception properly caught\n"; }
?>
--EXPECTF--
Warning: in %s line 2: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Notice: Object of class d could not be converted to int in %sbug73337.php on line 3

Notice: Object of class d could not be converted to int in %sbug73337.php on line 3

Fatal error: Uncaught Exception in %sbug73337.php:2
Stack trace:
#0 %sbug73337.php(4): d->__destruct()
#1 {main}

Next Exception in %sbug73337.php:2
Stack trace:
#0 %sbug73337.php(4): d->__destruct()
#1 {main}
  thrown in %sbug73337.php on line 4
