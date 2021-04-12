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

echo "\n-- Testing date_modify() function with zero arguments --\n";
var_dump( date_modify() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_modify(): 2 required, 0 provided in %s on line %d
 -- compile-error
