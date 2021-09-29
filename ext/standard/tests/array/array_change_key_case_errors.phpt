--TEST--
Test array_change_key_case() function - 3
--FILE--
<?php
/* generate different failure conditions */
$int_var  = -19;
$item = array ("one" => 1, "two" => 2, "THREE" => 3, "FOUR" => "four");

var_dump( array_change_key_case($int_var) ); // args less than expected
var_dump( array_change_key_case($int_var, CASE_UPPER) ); // invalid first argument

echo "end\n";
?>
--EXPECTF--
Warning: array_change_key_case() expects parameter 1 to be array, integer given in %s on line %d
NULL

Warning: array_change_key_case() expects parameter 1 to be array, integer given in %s on line %d
NULL
end
