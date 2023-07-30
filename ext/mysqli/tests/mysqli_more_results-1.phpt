--TEST--
mysqli_more_results()
--FILE--
<?php
	mysqli_more_results();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_more_results(): 1 required, 0 provided in %s on line %d
 -- compile-error
