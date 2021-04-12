--TEST--
Test date_modify() function : error conditions
--FILE--
<?php
/* Prototype  : DateTime date_modify  ( DateTime $object  , string $modify  )
 * Description: Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by strtotime().
 * Source code: ext/date/php_date.c
 * Alias to functions: public DateTime DateTime::modify()
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_modify() : error conditions ***\n";

// Create a date object
$datetime = date_create("2009-01-30 19:34:10");
$modify = "+1 day";

echo "\n-- Testing date_modify() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( date_modify($invalid_obj, $modify) );
$invalid_obj = 10;
var_dump( date_modify($invalid_obj, $modify) );
$invalid_obj = null;
var_dump( date_modify($invalid_obj, $modify) );

?>
===DONE===
--EXPECTF--
*** Testing date_modify() : error conditions ***

-- Testing date_modify() function with an invalid values for $object argument --

Warning: date_modify() expects parameter 1 to be DateTime, object given in %s on line %d
bool(false)

Warning: date_modify() expects parameter 1 to be DateTime, integer given in %s on line %d
bool(false)

Warning: date_modify() expects parameter 1 to be DateTime, null given in %s on line %d
bool(false)
===DONE===
