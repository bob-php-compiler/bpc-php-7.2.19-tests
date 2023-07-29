--TEST--
mysqli_autocommit()
--FILE--
<?php
    mysqli_autocommit();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_autocommit(): 2 required, 0 provided in %s on line %d
 -- compile-error
