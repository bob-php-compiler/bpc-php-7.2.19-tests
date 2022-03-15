--TEST--
move_uploaded_file() function
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php

echo "Wrong parameters\n";
var_dump(move_uploaded_file());


?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function move_uploaded_file(): 2 required, 0 provided in %s on line %d
 -- compile-error
