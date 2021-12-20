--TEST--
gethostbyname() function - basic invalid parameter test
--CREDITS--
"Sylvain R." <sracine@phpquebec.org>
--INI--
display_errors=false
--FILE--
<?php
	var_dump(gethostbyname());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gethostbyname(): 1 required, 0 provided in %s on line %d
 -- compile-error
