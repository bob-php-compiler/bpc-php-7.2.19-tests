--TEST--
is_uploaded_file() function
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php

// Error cases
var_dump(is_uploaded_file('a', 'b'));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_uploaded_file(): 1 at most, 2 provided in %s on line %d
 -- compile-error
