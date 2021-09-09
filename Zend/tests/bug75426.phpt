--TEST--
Bug #75426: "Cannot use empty array elements" reports wrong position
--FILE--
<?php
$a = array(
    1,
    2,
    3,
    ,
    5,
    6,
);
?>
--EXPECTF--
Parse error: %s in %s on line %d
