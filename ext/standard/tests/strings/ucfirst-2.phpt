--TEST--
"ucfirst()" function
--FILE--
<?php

$str_array = array(
		    "testing ucfirst.",
 		    "1.testing ucfirst",
	     	  );
echo "\n#### error conditions ####";
/* More than expected no. of args */
ucfirst($str_array[0], $str_array[1]);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ucfirst(): 1 at most, 2 provided in %s on line %d
 -- compile-error
