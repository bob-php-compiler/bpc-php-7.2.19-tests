--TEST--
Test DateTimeZone::getTransitions() function : error conditions
--FILE--
<?php
/* Prototype  : array DateTimeZone::getTransitions  ([ int $timestamp_begin  [, int $timestamp_end  ]] )
 * Description: Returns all transitions for the timezone
 * Source code: ext/date/php_date.c
 * Alias to functions: timezone_transitions_get()
 */

//Set the default time zone
date_default_timezone_set("GMT");

$tz = new DateTimeZone("Europe/London");

echo "*** Testing DateTimeZone::getTransitions() : error conditions ***\n";

echo "\n-- Testing DateTimeZone::getTransitions() function with more than expected no. of arguments --\n";
$timestamp_begin = mktime(0, 0, 0, 1, 1, 1972);
$timestamp_end = mktime(0, 0, 0, 1, 1, 1975);
$extra_arg = 99;

var_dump( $tz->getTransitions($timestamp_begin, $timestamp_end, $extra_arg) );

?>
===DONE===
--EXPECT--
*** Testing DateTimeZone::getTransitions() : error conditions ***

-- Testing DateTimeZone::getTransitions() function with more than expected no. of arguments --
array(7) {
  [0]=>
  array(5) {
    ["ts"]=>
    int(63072000)
    ["time"]=>
    string(24) "1972-01-01T00:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [1]=>
  array(5) {
    ["ts"]=>
    int(69818400)
    ["time"]=>
    string(24) "1972-03-19T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [2]=>
  array(5) {
    ["ts"]=>
    int(89172000)
    ["time"]=>
    string(24) "1972-10-29T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [3]=>
  array(5) {
    ["ts"]=>
    int(101268000)
    ["time"]=>
    string(24) "1973-03-18T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [4]=>
  array(5) {
    ["ts"]=>
    int(120621600)
    ["time"]=>
    string(24) "1973-10-28T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [5]=>
  array(5) {
    ["ts"]=>
    int(132717600)
    ["time"]=>
    string(24) "1974-03-17T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [6]=>
  array(5) {
    ["ts"]=>
    int(152071200)
    ["time"]=>
    string(24) "1974-10-27T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
}
===DONE===
