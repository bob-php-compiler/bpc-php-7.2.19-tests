--TEST--
Testing __callstatic declaration in interface with missing the 'static' modifier
--FILE--
<?php

interface a {
	function __callstatic($a, $b);
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method a::__callstatic() must be static in %s on line %d
 -- compile-error
