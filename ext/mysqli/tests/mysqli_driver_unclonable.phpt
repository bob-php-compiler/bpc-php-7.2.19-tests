--TEST--
Trying to clone mysqli_driver object
--FILE--
<?php
	$driver = new mysqli_driver;
	$driver_clone = clone $driver;
	print "done!";
?>
--EXPECTF--
Fatal error: Uncaught Error: Trying to clone an uncloneable object of class mysqli_driver in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
