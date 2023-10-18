--TEST--
Check that SplObjectStorage::setInfo returns NULL when no param is passed
--CREDITS--
PHPNW Testfest 2009 - Simon Westcott (swestcott@gmail.com)
--FILE--
<?php

$s = new SplObjectStorage();

var_dump($s->setInfo());

?>
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: Too few arguments to method SplObjectStorage::setInfo(): 1 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
