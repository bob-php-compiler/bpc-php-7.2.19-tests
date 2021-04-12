--TEST--
Test date_format() function : error conditions
--FILE--
<?php
/* Prototype  : string date_format  ( DateTime $object  , string $format  )
 * Description: Returns date formatted according to given format
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTime::format
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_format() : error conditions ***\n";

$format = "F j, Y, g:i a";

echo "\n-- Testing date_create() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( date_format($invalid_obj, $format) );
$invalid_obj = 10;
var_dump( date_format($invalid_obj, $format) );
$invalid_obj = null;
var_dump( date_format($invalid_obj, $format) );

?>
===DONE===
--EXPECTF--
*** Testing date_format() : error conditions ***

-- Testing date_create() function with an invalid values for $object argument --

Warning: date_format() expects parameter 1 to be DateTimeInterface, object given in %sp on line %d
bool(false)

Warning: date_format() expects parameter 1 to be DateTimeInterface, integer given in %s on line %d
bool(false)

Warning: date_format() expects parameter 1 to be DateTimeInterface, null given in %s on line %d
bool(false)
===DONE===
