--TEST--
Check that SplObjectStorage::attach generates a warning and returns NULL when bad params are passed
--CREDITS--
PHPNW Testfest 2009 - Simon Westcott (swestcott@gmail.com)
--FILE--
<?php

$s = new SplObjectStorage();

var_dump($s->attach(true));
var_dump($s->attach(new stdClass, true, true));

?>
--EXPECTF--
Warning: SplObjectStorage::attach() expects parameter 1 to be object, boolean given in %s on line %d
NULL

Warning: Too many arguments to method SplObjectStorage::attach(): 2 at most, 3 provided in %s on line %d
NULL
