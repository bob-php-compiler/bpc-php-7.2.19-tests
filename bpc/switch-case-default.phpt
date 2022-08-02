--TEST--
switch-case tests
--FILE--
<?php

$val = null;

switch ($val) {
    case 'a':
        $val = 'A';
        break;
    case 'b':
        $val = 'B';
        break;
    default:
        $val = 'X';
        break;
}

var_dump($val);

?>
--EXPECT--
string(1) "X"
