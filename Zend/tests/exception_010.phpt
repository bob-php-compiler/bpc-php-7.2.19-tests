--TEST--
Testing Exception's methods
--FILE--
<?php

$x = new Exception;
$x->gettraceasstring(1);
$x->gettraceasstring();
$x->__tostring(1);
$x->gettrace(1);
$x->getline(1);
$x->getfile(1);
$x->getmessage(1);
$x->getcode(1);

?>
--EXPECTF--
Warning: Too many arguments to method Exception::getTraceAsString(): 0 at most, 1 provided in %s on line %d

Warning: Too many arguments to method Exception::__toString(): 0 at most, 1 provided in %s on line %d

Warning: Too many arguments to method Exception::getTrace(): 0 at most, 1 provided in %s on line %d

Warning: Too many arguments to method Exception::getLine(): 0 at most, 1 provided in %s on line %d

Warning: Too many arguments to method Exception::getFile(): 0 at most, 1 provided in %s on line %d

Warning: Too many arguments to method Exception::getMessage(): 0 at most, 1 provided in %s on line %d

Warning: Too many arguments to method Exception::getCode(): 0 at most, 1 provided in %s on line %d
