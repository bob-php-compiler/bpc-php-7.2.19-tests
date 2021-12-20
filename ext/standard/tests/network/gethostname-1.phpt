--TEST--
string gethostname(void);
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br> - #phparty7 - @phpsp - novatec/2015 - sao paulo - br
--FILE--
<?php
var_dump(gethostname("php-zend-brazil"));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gethostname(): 0 at most, 1 provided in %s on line %d
 -- compile-error
