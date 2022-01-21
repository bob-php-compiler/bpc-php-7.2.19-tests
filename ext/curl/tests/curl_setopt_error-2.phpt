--TEST--
curl_setopt() basic parameter test
--CREDITS--
Paul Sohier
#phptestfest utrecht
--FILE--
<?php
echo "*** curl_setopt() call with incorrect parameters\n";
curl_setopt(false);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function curl_setopt(): 3 required, 1 provided in %s on line %d
 -- compile-error
