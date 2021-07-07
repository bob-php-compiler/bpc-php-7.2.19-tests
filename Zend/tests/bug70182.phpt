--TEST--
Bug #70182 ($string[] assignment with +=)
--FILE--
<?php

$str = "abc";
$str[] += $str;

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot use [] for reading in %s on line 4
 -- compile-error
