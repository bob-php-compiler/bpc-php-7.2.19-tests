--TEST--
curl_setopt() basic parameter test
--CREDITS--
Paul Sohier
#phptestfest utrecht
--FILE--
<?php
echo "*** curl_setopt() call with incorrect parameters\n";
$ch = curl_init();

curl_setopt($ch, 1, false);

curl_setopt(false, false, false);
curl_setopt($ch, '', false);
curl_setopt($ch, 1, '');
curl_setopt($ch, -10, 0);
?>
--EXPECTF--
*** curl_setopt() call with incorrect parameters

Warning: curl_setopt() expects parameter 1 to be resource, boolean given in %s on line %d

Warning: curl_setopt() expects parameter 2 to be integer, string given in %s on line %d

Warning: curl_setopt(): Invalid curl configuration option in %scurl_setopt_error.php on line %d
