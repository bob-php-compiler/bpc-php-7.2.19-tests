--TEST--
Persistent connections and mysqli.max_links
--FILE--
<?php
	mysqli_get_links_stats(1);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_get_links_stats(): 0 at most, 1 provided in %s on line %d
 -- compile-error
