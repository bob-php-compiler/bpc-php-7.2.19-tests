--TEST--
Test function getservbyport() by calling it more than or less than its expected arguments
--CREDITS--
Italian PHP TestFest 2009 Cesena 19-20-21 june
Fabio Fabbrucci (fabbrucci@grupporetina.com)
Michele Orselli (mo@ideato.it)
Simone Gentili (sensorario@gmail.com)
--FILE--
<?php
$port = 80;
var_dump(getservbyport($port));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function getservbyport(): 2 required, 1 provided in %s on line %d
 -- compile-error
