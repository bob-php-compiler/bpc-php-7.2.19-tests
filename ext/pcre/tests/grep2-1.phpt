--TEST--
preg_grep() 2nd test
--SKIPIF--
<?php if (!PCRE_JIT_SUPPORT) die("skip no pcre jit support"); ?>
--INI--
pcre.jit=1
--FILE--
<?php

var_dump(preg_grep(1,array(),3,4));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function preg_grep(): 3 at most, 4 provided in %sgrep2-1.php on line 3
 -- compile-error
