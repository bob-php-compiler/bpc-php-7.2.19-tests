--TEST--
SPL: iterator_to_array() exceptions test
--CREDITS--
Lance Kesson jac_kesson@hotmail.com
#testfest London 2009-05-09
--FILE--
<?php

iterator_to_array();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function iterator_to_array(): 1 required, 0 provided in %s on line %d
 -- compile-error
