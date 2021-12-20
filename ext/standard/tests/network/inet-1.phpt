--TEST--
inet_ntop() & inet_pton() tests
--SKIPIF--
<?php
if (!function_exists("inet_ntop")) die("skip no inet_ntop()");
if (!function_exists("inet_pton")) die("skip no inet_pton()");
?>
--FILE--
<?php

var_dump(inet_ntop());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function inet_ntop(): 1 required, 0 provided in %s on line %d
 -- compile-error
