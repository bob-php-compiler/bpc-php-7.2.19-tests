--TEST--
Test DateTime::modify() function : error conditions
--FILE--
<?php
/* Prototype  : public DateTime DateTime::modify  ( string $modify  )
 * Description: Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by strtotime().
 * Source code: ext/date/php_date.c
 * Alias to functions: public date_modify()
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing DateTime::modify() : error conditions ***\n";

// Create a date object
$object = new DateTime("2009-01-30 19:34:10");

echo "\n-- Testing DateTime::modify() function with more than expected no. of arguments --\n";
$modify = "+1 day";
$extra_arg = 99;
var_dump( $object->modify($modify, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing DateTime::modify() : error conditions ***

-- Testing DateTime::modify() function with more than expected no. of arguments --

Warning: Too many arguments to method DateTime::modify(): 1 at most, 2 provided in %s on line %d
object(DateTime)#1 (3) {
  ["date"]=>
  string(26) "2009-01-31 19:34:10.000000"
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/London"
}
===DONE===
