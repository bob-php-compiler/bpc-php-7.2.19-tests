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

echo "\n-- Testing DateTime::modify() function with less than expected no. of arguments --\n";
var_dump( $object->modify() );
?>
===DONE===
--EXPECTF--
*** Testing DateTime::modify() : error conditions ***

-- Testing DateTime::modify() function with less than expected no. of arguments --

Fatal error: Uncaught ArgumentCountError: Too few arguments to method DateTime::modify(): 1 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
