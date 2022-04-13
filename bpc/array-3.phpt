--TEST--
array tests
--FILE--
<?php
$a = array(1, 2, 3);
echo "expect 0 1\n";
var_dump(key($a), current($a));
next($a);
echo "expect 1 2\n";
var_dump(key($a), current($a));
next($a);
echo "expect 2 3\n";
var_dump(key($a), current($a));
echo "expect NULL false\n";
next($a);
var_dump(key($a), current($a));
echo "add 4, expect 3 4\n";
$a[] = 4;
var_dump(key($a), current($a));
echo "expect NULL false\n";
next($a);
var_dump(key($a), current($a));
?>
--EXPECT--
expect 0 1
int(0)
int(1)
expect 1 2
int(1)
int(2)
expect 2 3
int(2)
int(3)
expect NULL false
NULL
bool(false)
add 4, expect 3 4
int(3)
int(4)
expect NULL false
NULL
bool(false)
