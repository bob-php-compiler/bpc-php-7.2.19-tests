--TEST--
Testing operations with undefined variable
--FILE--
<?php

var_dump($a[1]);
var_dump($a[$c]);
var_dump($a + 1);
var_dump($a + $b);
var_dump($a++);
var_dump(++$b);
var_dump($a->$b);
var_dump($a->$b);
var_dump($a->$b->{$c[1]});

?>
--EXPECTF--
NULL
NULL
int(1)
int(0)
NULL
int(1)

Notice: Trying to get property '1' of non-object in %s on line %d
NULL

Notice: Trying to get property '1' of non-object in %s on line %d
NULL

Notice: Trying to get property '1' of non-object in %s on line %d

Notice: Trying to get property '' of non-object in %s on line %d
NULL
