--TEST--
Bug #23951 (Defines not working in inherited classes)
--ARGS--
--bpc-include-file tests/classes/bug23951.inc
--FILE--
<?php

define('FOO1', 1);
define('FOO2', 2);

include "bug23951.inc";

$a = new A;
$b = new B;

print_r($a);
print_r($b->a_var);
print_r($b->b_var);

?>
--EXPECT--
A Object
(
    [a_var] => Array
        (
            [1] => foo1_value
            [2] => foo2_value
        )

)
Array
(
    [1] => foo1_value
    [2] => foo2_value
)
foo
