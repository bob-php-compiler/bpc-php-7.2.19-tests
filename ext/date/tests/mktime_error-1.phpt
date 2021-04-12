--TEST--
Test mktime() function : error conditions
--FILE--
<?php
/* Prototype  : int mktime  ([ int $hour= date("H")  [, int $minute= date("i")  [, int $second= date("s")  [, int $month= date("n")  [, int $day= date("j")  [, int $year= date("Y")  [, int $is_dst= -1  ]]]]]]] )
 * Description: Get Unix timestamp for a date
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */
error_reporting(E_ALL | E_STRICT);

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing mktime() : error conditions ***\n";

echo "\n-- Testing mktime() function with Zero arguments --\n";
var_dump( mktime() );
?>
===DONE===
--EXPECTF--
*** Testing mktime() : error conditions ***

-- Testing mktime() function with Zero arguments --

Deprecated: mktime(): You should be using the time() function instead in %s on line %d
int(%d)
===DONE===
