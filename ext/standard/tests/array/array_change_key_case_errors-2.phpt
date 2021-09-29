--TEST--
Test array_change_key_case() function - 3
--FILE--
<?php
/* generate different failure conditions */
$item = array ("one" => 1, "two" => 2, "THREE" => 3, "FOUR" => "four");

var_dump( array_change_key_case($item, $item["one"], "CASE_UPPER") ); // more than expected numbers

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_change_key_case(): 2 at most, 3 provided in %s on line 5
 -- compile-error
