--TEST--
"lcfirst()" function
--FILE--
<?php

$str_array = array(
		    "TesTing lcfirst.",
 		    "1.testing lcfirst",
	     	  );

echo "\n#### error conditions ####";
/* More than expected no. of args */
lcfirst($str_array[0], $str_array[1]);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function lcfirst(): 1 at most, 2 provided in %s on line %d
 -- compile-error
