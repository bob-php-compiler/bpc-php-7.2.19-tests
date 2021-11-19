--TEST--
various file stat func tests
--FILE--
<?php

var_dump(fileinode("."));
var_dump(fileowner("."));
var_dump(filegroup("."));
var_dump(fileatime("."));
var_dump(filectime("."));

var_dump(fileinode("./.."));
var_dump(fileowner("./.."));
var_dump(filegroup("./.."));
var_dump(fileatime("./.."));
var_dump(filectime("./.."));

var_dump(fileinode("filestat.php"));
var_dump(fileowner("filestat.php"));
var_dump(filegroup("filestat.php"));
var_dump(fileatime("filestat.php"));
var_dump(filectime("filestat.php"));

var_dump(fileinode("/no/such/file/or/dir"));
var_dump(fileowner("/no/such/file/or/dir"));
var_dump(filegroup("/no/such/file/or/dir"));
var_dump(fileatime("/no/such/file/or/dir"));
var_dump(filectime("/no/such/file/or/dir"));

echo "Done\n";
?>
--EXPECTF--
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)

Warning: fileinode(): stat failed for /no/such/file/or/dir in %s on line %d
bool(false)

Warning: fileowner(): stat failed for /no/such/file/or/dir in %s on line %d
bool(false)

Warning: filegroup(): stat failed for /no/such/file/or/dir in %s on line %d
bool(false)

Warning: fileatime(): stat failed for /no/such/file/or/dir in %s on line %d
bool(false)

Warning: filectime(): stat failed for /no/such/file/or/dir in %s on line %d
bool(false)
Done
