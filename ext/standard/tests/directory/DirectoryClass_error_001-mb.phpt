--TEST--
Directory class behaviour.
--FILE--
<?php

$d = getcwd().PATH_SEPARATOR."私はガラスを食べられます";

mkdir($d);

echo "\n--> Try all methods with bad handle:\n";
$d = new Directory($d);
$d->handle = "Havoc!";
var_dump($d->read());
var_dump($d->rewind());
var_dump($d->close());

echo "\n--> Try all methods with no handle:\n";
$d = new Directory($d);
unset($d->handle);
var_dump($d->read());
var_dump($d->rewind());
var_dump($d->close());

echo "\n--> Try all methods with wrong number of args:\n";
$d = new Directory($d);
var_dump($d->read(1,2));
var_dump($d->rewind(1,2));
var_dump($d->close(1,2));

?>
--CLEAN--
<?php
$d = getcwd().PATH_SEPARATOR."私はガラスを食べられます";
rmdir($d);

?>
--EXPECTF--
--> Try all methods with bad handle:

Warning: Directory::read(): supplied argument is not a valid Directory resource in %s on line %d
bool(false)

Warning: Directory::rewind(): supplied argument is not a valid Directory resource in %s on line %d
bool(false)

Warning: Directory::close(): supplied argument is not a valid Directory resource in %s on line %d
bool(false)

--> Try all methods with no handle:

Warning: Directory::read(): Unable to find my handle property in %s on line %d
bool(false)

Warning: Directory::rewind(): Unable to find my handle property in %s on line %d
bool(false)

Warning: Directory::close(): Unable to find my handle property in %s on line %d
bool(false)

--> Try all methods with wrong number of args:

Warning: Too many arguments to method Directory::read(): 0 at most, 2 provided in %s on line %d

Warning: Directory::read(): Unable to find my handle property in %s on line %d
bool(false)

Warning: Too many arguments to method Directory::rewind(): 0 at most, 2 provided in %s on line %d

Warning: Directory::rewind(): Unable to find my handle property in %s on line %d
bool(false)

Warning: Too many arguments to method Directory::close(): 0 at most, 2 provided in %s on line %d

Warning: Directory::close(): Unable to find my handle property in %s on line %d
bool(false)
