--TEST--
SPL: iterator_count() exceptions test
--CREDITS--
Lance Kesson jac_kesson@hotmail.com
#testfest London 2009-05-09
--FILE--
<?php

iterator_count();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function iterator_count(): 1 required, 0 provided in %s on line %d
 -- compile-error
