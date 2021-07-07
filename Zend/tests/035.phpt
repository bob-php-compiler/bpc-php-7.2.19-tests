--TEST--
Using 'static' and 'global' in global scope
--FILE--
<?php

global $var, $var, $var;
var_dump($var);

var_dump($GLOBALS['var']);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: unexpected global-decl, global-decl only support in function or method in %s on line 3
 -- compile-error
