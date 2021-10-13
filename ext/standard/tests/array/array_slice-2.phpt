--TEST--
Testing array_slice() function
--FILE--
<?php

$var_array = array(
                   array(),
                   array(1,2,3,4,5,6,7,8,9),
                   array("One", "Two", "Three", "Four", "Five"),
                   array(6, "six", 7, "seven", 8, "eight", 9, "nine"),
                   array( "a" => "aaa", "A" => "AAA", "c" => "ccc", "d" => "ddd", "e" => "eee"),
                   array("1" => "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five"),
                   array(1 => "one", 2 => "two", 3 => 7, 4 => "four", 5 => "five"),
                   array("f" => "fff", "1" => "one", 4 => 6, "" => "blank", 2.4 => "float", "F" => "FFF",
                         "blank" => "", 3.7 => 3.7, 5.4 => 7, 6 => 8.6, '5' => "Five"),
                   array(12, "name", 'age', '45'),
                   array( array("oNe", "tWo", 4), array(10, 20, 30, 40, 50), array())
                 );

/* Single args */
echo"\n*** Output for Single array Argument ***\n";
array_slice($var_array);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_slice(): 2 required, 1 provided in %s on line %d
 -- compile-error
