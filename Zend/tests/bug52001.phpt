--TEST--
Bug #52001 (Memory allocation problems after using variable variables)
--FILE--
<?php
a(0,$$var);

$temp1=1;
$temp2=2;
var_dump($temp1);

function a($b,$c) {}
?>
--EXPECTF--
int(1)
