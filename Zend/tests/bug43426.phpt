--TEST--
Bug #43426 (crash on nested call_user_func calls)
--FILE--
<?php
$c = 1; // doesn't matter
call_user_func("foo2", $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c,
$c,
 $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c, $c);
function foo2($d) {}
echo "ok\n";
?>
--EXPECTF--
Warning: Too many arguments to function foo2(): 1 at most, 259 provided in %sbug43426.php on line 31
ok
