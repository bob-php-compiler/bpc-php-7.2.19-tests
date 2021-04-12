--TEST--
Check the function date_timestamp_set() with 3 parameters.
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
--INI--
date.timezone = UTC
date_default_timezone_set("America/Sao_Paulo");
--FILE--
<?php
$dftz021 = date_default_timezone_get(); //UTC

$dtms021 = new DateTime();

date_timestamp_set($dtms021, 123456789, 'error');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_timestamp_set(): 2 at most, 3 provided in %s on line %d
 -- compile-error
