--TEST--
Directory class behaviour.
--FILE--
<?php
/*
 * Prototype: object dir(string directory[, resource context])
 * Description: Directory class with properties, handle and class and methods read, rewind and close
 * Class is defined in ext/standard/dir.c
 */

//echo "Structure of Directory class:\n";
//$rc = new ReflectionClass("Directory");
//echo $rc;

echo "Cannot instantiate a valid Directory directly:\n";
$d = new Directory(getcwd());
var_dump($d);
var_dump($d->read());

?>
--EXPECTF--
Cannot instantiate a valid Directory directly:
object(Directory)#%d (0) {
}

Warning: Directory::read(): Unable to find my handle property in %s on line 15
bool(false)
