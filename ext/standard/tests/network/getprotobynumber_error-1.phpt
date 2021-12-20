--TEST--
getprotobynumber function errors test
--CREDITS--
edgarsandi - <edgar.r.sandi@gmail.com>
--FILE--
<?php
	// empty protocol number
	var_dump(getprotobynumber());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function getprotobynumber(): 1 required, 0 provided in %s on line %d
 -- compile-error
