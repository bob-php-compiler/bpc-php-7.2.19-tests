--TEST--
recursive mkdir() tests
--FILE--
<?php

var_dump(mkdir("mkdir003/subdir", 0777, true));
var_dump(rmdir("mkdir003/subdir"));
var_dump(rmdir("mkdir003"));

var_dump(mkdir("./mkdir003/subdir", 0777, true));
var_dump(rmdir("./mkdir003/subdir"));
var_dump(rmdir("./mkdir003"));

var_dump(mkdir("./mkdir003/subdir", 0777, true));
var_dump(rmdir("./mkdir003/subdir"));
var_dump(rmdir("./mkdir003"));

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
Done
