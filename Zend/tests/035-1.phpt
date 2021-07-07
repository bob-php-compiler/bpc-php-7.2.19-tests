--TEST--
Using 'static' and 'global' in global scope
--FILE--
<?php

static $var, $var, $var = -1;
var_dump($var);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: unexpected static-decl, static-decl only support in function or method in %s on line 3
 -- compile-error
