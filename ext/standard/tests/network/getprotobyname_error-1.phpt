--TEST--
getprotobyname function errors test
--CREDITS--
edgarsandi - <edgar.r.sandi@gmail.com>
--FILE--
<?php
	// empty protocol name
	var_dump(getprotobyname());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function getprotobyname(): 1 required, 0 provided in %s on line %d
 -- compile-error
