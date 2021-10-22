--TEST--
Test mt_srand() - wrong params test mt_srand()
--FILE--
<?php
var_dump(mt_srand("fivehundred"));
var_dump(mt_srand("500ABC"));
?>
--EXPECTF--
Warning: mt_srand() expects parameter 1 to be integer, string given in %s on line 2
NULL

Notice: A non well formed numeric value encountered in %s on line 3
NULL
