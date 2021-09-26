--TEST--
assigning tests
--FILE--
<?php

function f()
{
    echo "f\n";
    return 'f';
}

function g()
{
    echo "g\n";
    return 'g';
}

$a = 1;
$a->{f()}->{g()}[0]++;
var_dump($a);

$a = array();
$a[new stdclass]->{f()}[0]++;
var_dump($a);

?>
--EXPECTF--
f
g

Warning: Attempt to modify property 'f' of non-object in %s on line 16
int(1)
f

Warning: Illegal offset type in %s on line 20
array(0) {
}
