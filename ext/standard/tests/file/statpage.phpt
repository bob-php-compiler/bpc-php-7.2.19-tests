--TEST--
getmyuid() and others
--FILE--
<?php

var_dump(getmyuid());
var_dump(getmypid());
var_dump(getmygid());

echo "Done\n";
?>
--EXPECTF--
int(%d)
int(%d)
int(%d)
Done
