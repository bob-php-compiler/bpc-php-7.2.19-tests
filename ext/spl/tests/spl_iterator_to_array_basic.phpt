--TEST--
SPL: iterator_to_array, Test function to convert iterator to array
--CREDITS--
Chris Scott chris.scott@nstein.com
#testfest London 2009-05-09
--FILE--
<?php

iterator_to_array();//requires iterator as arg

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function iterator_to_array(): 1 required, 0 provided in %s on line %d
 -- compile-error
