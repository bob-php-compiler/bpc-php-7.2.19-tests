--TEST--
move_uploaded_file() function
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php

echo "Wrong parameters\n";
var_dump(move_uploaded_file(1, 2, 3));


?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function move_uploaded_file(): 2 at most, 3 provided in %s on line %d
 -- compile-error
