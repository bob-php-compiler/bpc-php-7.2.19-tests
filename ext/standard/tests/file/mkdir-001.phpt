--TEST--
mkdir() tests
--FILE--
<?php

var_dump(mkdir("mkdir001"));
var_dump(mkdir("mkdir001/subdir"));
var_dump(rmdir("mkdir001/subdir"));
var_dump(rmdir("mkdir001"));

var_dump(mkdir("./mkdir001"));
var_dump(mkdir("./mkdir001/subdir"));
var_dump(rmdir("./mkdir001/subdir"));
var_dump(rmdir("./mkdir001"));

var_dump(mkdir("./mkdir001"));
var_dump(mkdir("./mkdir001/subdir"));
var_dump(rmdir("./mkdir001/subdir"));
var_dump(rmdir("./mkdir001"));

echo "Done\n";
?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
Done
