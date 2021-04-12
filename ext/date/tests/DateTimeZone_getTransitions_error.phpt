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
array(134) {
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
  [7]=>
  array(5) {
    ["ts"]=>
    int(164167200)
    ["time"]=>
    string(24) "1975-03-16T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [8]=>
  array(5) {
    ["ts"]=>
    int(183520800)
    ["time"]=>
    string(24) "1975-10-26T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [9]=>
  array(5) {
    ["ts"]=>
    int(196221600)
    ["time"]=>
    string(24) "1976-03-21T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [10]=>
  array(5) {
    ["ts"]=>
    int(214970400)
    ["time"]=>
    string(24) "1976-10-24T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [11]=>
  array(5) {
    ["ts"]=>
    int(227671200)
    ["time"]=>
    string(24) "1977-03-20T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [12]=>
  array(5) {
    ["ts"]=>
    int(246420000)
    ["time"]=>
    string(24) "1977-10-23T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [13]=>
  array(5) {
    ["ts"]=>
    int(259120800)
    ["time"]=>
    string(24) "1978-03-19T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [14]=>
  array(5) {
    ["ts"]=>
    int(278474400)
    ["time"]=>
    string(24) "1978-10-29T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [15]=>
  array(5) {
    ["ts"]=>
    int(290570400)
    ["time"]=>
    string(24) "1979-03-18T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [16]=>
  array(5) {
    ["ts"]=>
    int(309924000)
    ["time"]=>
    string(24) "1979-10-28T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [17]=>
  array(5) {
    ["ts"]=>
    int(322020000)
    ["time"]=>
    string(24) "1980-03-16T02:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [18]=>
  array(5) {
    ["ts"]=>
    int(341373600)
    ["time"]=>
    string(24) "1980-10-26T02:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [19]=>
  array(5) {
    ["ts"]=>
    int(354675600)
    ["time"]=>
    string(24) "1981-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [20]=>
  array(5) {
    ["ts"]=>
    int(372819600)
    ["time"]=>
    string(24) "1981-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [21]=>
  array(5) {
    ["ts"]=>
    int(386125200)
    ["time"]=>
    string(24) "1982-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [22]=>
  array(5) {
    ["ts"]=>
    int(404269200)
    ["time"]=>
    string(24) "1982-10-24T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [23]=>
  array(5) {
    ["ts"]=>
    int(417574800)
    ["time"]=>
    string(24) "1983-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [24]=>
  array(5) {
    ["ts"]=>
    int(435718800)
    ["time"]=>
    string(24) "1983-10-23T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [25]=>
  array(5) {
    ["ts"]=>
    int(449024400)
    ["time"]=>
    string(24) "1984-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [26]=>
  array(5) {
    ["ts"]=>
    int(467773200)
    ["time"]=>
    string(24) "1984-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [27]=>
  array(5) {
    ["ts"]=>
    int(481078800)
    ["time"]=>
    string(24) "1985-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [28]=>
  array(5) {
    ["ts"]=>
    int(499222800)
    ["time"]=>
    string(24) "1985-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [29]=>
  array(5) {
    ["ts"]=>
    int(512528400)
    ["time"]=>
    string(24) "1986-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [30]=>
  array(5) {
    ["ts"]=>
    int(530672400)
    ["time"]=>
    string(24) "1986-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [31]=>
  array(5) {
    ["ts"]=>
    int(543978000)
    ["time"]=>
    string(24) "1987-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [32]=>
  array(5) {
    ["ts"]=>
    int(562122000)
    ["time"]=>
    string(24) "1987-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [33]=>
  array(5) {
    ["ts"]=>
    int(575427600)
    ["time"]=>
    string(24) "1988-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [34]=>
  array(5) {
    ["ts"]=>
    int(593571600)
    ["time"]=>
    string(24) "1988-10-23T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [35]=>
  array(5) {
    ["ts"]=>
    int(606877200)
    ["time"]=>
    string(24) "1989-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [36]=>
  array(5) {
    ["ts"]=>
    int(625626000)
    ["time"]=>
    string(24) "1989-10-29T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [37]=>
  array(5) {
    ["ts"]=>
    int(638326800)
    ["time"]=>
    string(24) "1990-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [38]=>
  array(5) {
    ["ts"]=>
    int(657075600)
    ["time"]=>
    string(24) "1990-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [39]=>
  array(5) {
    ["ts"]=>
    int(670381200)
    ["time"]=>
    string(24) "1991-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [40]=>
  array(5) {
    ["ts"]=>
    int(688525200)
    ["time"]=>
    string(24) "1991-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [41]=>
  array(5) {
    ["ts"]=>
    int(701830800)
    ["time"]=>
    string(24) "1992-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [42]=>
  array(5) {
    ["ts"]=>
    int(719974800)
    ["time"]=>
    string(24) "1992-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [43]=>
  array(5) {
    ["ts"]=>
    int(733280400)
    ["time"]=>
    string(24) "1993-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [44]=>
  array(5) {
    ["ts"]=>
    int(751424400)
    ["time"]=>
    string(24) "1993-10-24T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [45]=>
  array(5) {
    ["ts"]=>
    int(764730000)
    ["time"]=>
    string(24) "1994-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [46]=>
  array(5) {
    ["ts"]=>
    int(782874000)
    ["time"]=>
    string(24) "1994-10-23T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [47]=>
  array(5) {
    ["ts"]=>
    int(796179600)
    ["time"]=>
    string(24) "1995-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [48]=>
  array(5) {
    ["ts"]=>
    int(814323600)
    ["time"]=>
    string(24) "1995-10-22T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [49]=>
  array(5) {
    ["ts"]=>
    int(820454400)
    ["time"]=>
    string(24) "1996-01-01T00:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [50]=>
  array(5) {
    ["ts"]=>
    int(828234000)
    ["time"]=>
    string(24) "1996-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [51]=>
  array(5) {
    ["ts"]=>
    int(846378000)
    ["time"]=>
    string(24) "1996-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [52]=>
  array(5) {
    ["ts"]=>
    int(859683600)
    ["time"]=>
    string(24) "1997-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [53]=>
  array(5) {
    ["ts"]=>
    int(877827600)
    ["time"]=>
    string(24) "1997-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [54]=>
  array(5) {
    ["ts"]=>
    int(891133200)
    ["time"]=>
    string(24) "1998-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [55]=>
  array(5) {
    ["ts"]=>
    int(909277200)
    ["time"]=>
    string(24) "1998-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [56]=>
  array(5) {
    ["ts"]=>
    int(922582800)
    ["time"]=>
    string(24) "1999-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [57]=>
  array(5) {
    ["ts"]=>
    int(941331600)
    ["time"]=>
    string(24) "1999-10-31T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [58]=>
  array(5) {
    ["ts"]=>
    int(954032400)
    ["time"]=>
    string(24) "2000-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [59]=>
  array(5) {
    ["ts"]=>
    int(972781200)
    ["time"]=>
    string(24) "2000-10-29T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [60]=>
  array(5) {
    ["ts"]=>
    int(985482000)
    ["time"]=>
    string(24) "2001-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [61]=>
  array(5) {
    ["ts"]=>
    int(1004230800)
    ["time"]=>
    string(24) "2001-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [62]=>
  array(5) {
    ["ts"]=>
    int(1017536400)
    ["time"]=>
    string(24) "2002-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [63]=>
  array(5) {
    ["ts"]=>
    int(1035680400)
    ["time"]=>
    string(24) "2002-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [64]=>
  array(5) {
    ["ts"]=>
    int(1048986000)
    ["time"]=>
    string(24) "2003-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [65]=>
  array(5) {
    ["ts"]=>
    int(1067130000)
    ["time"]=>
    string(24) "2003-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [66]=>
  array(5) {
    ["ts"]=>
    int(1080435600)
    ["time"]=>
    string(24) "2004-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [67]=>
  array(5) {
    ["ts"]=>
    int(1099184400)
    ["time"]=>
    string(24) "2004-10-31T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [68]=>
  array(5) {
    ["ts"]=>
    int(1111885200)
    ["time"]=>
    string(24) "2005-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [69]=>
  array(5) {
    ["ts"]=>
    int(1130634000)
    ["time"]=>
    string(24) "2005-10-30T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [70]=>
  array(5) {
    ["ts"]=>
    int(1143334800)
    ["time"]=>
    string(24) "2006-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [71]=>
  array(5) {
    ["ts"]=>
    int(1162083600)
    ["time"]=>
    string(24) "2006-10-29T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [72]=>
  array(5) {
    ["ts"]=>
    int(1174784400)
    ["time"]=>
    string(24) "2007-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [73]=>
  array(5) {
    ["ts"]=>
    int(1193533200)
    ["time"]=>
    string(24) "2007-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [74]=>
  array(5) {
    ["ts"]=>
    int(1206838800)
    ["time"]=>
    string(24) "2008-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [75]=>
  array(5) {
    ["ts"]=>
    int(1224982800)
    ["time"]=>
    string(24) "2008-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [76]=>
  array(5) {
    ["ts"]=>
    int(1238288400)
    ["time"]=>
    string(24) "2009-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [77]=>
  array(5) {
    ["ts"]=>
    int(1256432400)
    ["time"]=>
    string(24) "2009-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [78]=>
  array(5) {
    ["ts"]=>
    int(1269738000)
    ["time"]=>
    string(24) "2010-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [79]=>
  array(5) {
    ["ts"]=>
    int(1288486800)
    ["time"]=>
    string(24) "2010-10-31T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [80]=>
  array(5) {
    ["ts"]=>
    int(1301187600)
    ["time"]=>
    string(24) "2011-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [81]=>
  array(5) {
    ["ts"]=>
    int(1319936400)
    ["time"]=>
    string(24) "2011-10-30T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [82]=>
  array(5) {
    ["ts"]=>
    int(1332637200)
    ["time"]=>
    string(24) "2012-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [83]=>
  array(5) {
    ["ts"]=>
    int(1351386000)
    ["time"]=>
    string(24) "2012-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [84]=>
  array(5) {
    ["ts"]=>
    int(1364691600)
    ["time"]=>
    string(24) "2013-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [85]=>
  array(5) {
    ["ts"]=>
    int(1382835600)
    ["time"]=>
    string(24) "2013-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [86]=>
  array(5) {
    ["ts"]=>
    int(1396141200)
    ["time"]=>
    string(24) "2014-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [87]=>
  array(5) {
    ["ts"]=>
    int(1414285200)
    ["time"]=>
    string(24) "2014-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [88]=>
  array(5) {
    ["ts"]=>
    int(1427590800)
    ["time"]=>
    string(24) "2015-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [89]=>
  array(5) {
    ["ts"]=>
    int(1445734800)
    ["time"]=>
    string(24) "2015-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [90]=>
  array(5) {
    ["ts"]=>
    int(1459040400)
    ["time"]=>
    string(24) "2016-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [91]=>
  array(5) {
    ["ts"]=>
    int(1477789200)
    ["time"]=>
    string(24) "2016-10-30T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [92]=>
  array(5) {
    ["ts"]=>
    int(1490490000)
    ["time"]=>
    string(24) "2017-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [93]=>
  array(5) {
    ["ts"]=>
    int(1509238800)
    ["time"]=>
    string(24) "2017-10-29T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [94]=>
  array(5) {
    ["ts"]=>
    int(1521939600)
    ["time"]=>
    string(24) "2018-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [95]=>
  array(5) {
    ["ts"]=>
    int(1540688400)
    ["time"]=>
    string(24) "2018-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [96]=>
  array(5) {
    ["ts"]=>
    int(1553994000)
    ["time"]=>
    string(24) "2019-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [97]=>
  array(5) {
    ["ts"]=>
    int(1572138000)
    ["time"]=>
    string(24) "2019-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [98]=>
  array(5) {
    ["ts"]=>
    int(1585443600)
    ["time"]=>
    string(24) "2020-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [99]=>
  array(5) {
    ["ts"]=>
    int(1603587600)
    ["time"]=>
    string(24) "2020-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [100]=>
  array(5) {
    ["ts"]=>
    int(1616893200)
    ["time"]=>
    string(24) "2021-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [101]=>
  array(5) {
    ["ts"]=>
    int(1635642000)
    ["time"]=>
    string(24) "2021-10-31T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [102]=>
  array(5) {
    ["ts"]=>
    int(1648342800)
    ["time"]=>
    string(24) "2022-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [103]=>
  array(5) {
    ["ts"]=>
    int(1667091600)
    ["time"]=>
    string(24) "2022-10-30T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [104]=>
  array(5) {
    ["ts"]=>
    int(1679792400)
    ["time"]=>
    string(24) "2023-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [105]=>
  array(5) {
    ["ts"]=>
    int(1698541200)
    ["time"]=>
    string(24) "2023-10-29T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [106]=>
  array(5) {
    ["ts"]=>
    int(1711846800)
    ["time"]=>
    string(24) "2024-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [107]=>
  array(5) {
    ["ts"]=>
    int(1729990800)
    ["time"]=>
    string(24) "2024-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [108]=>
  array(5) {
    ["ts"]=>
    int(1743296400)
    ["time"]=>
    string(24) "2025-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [109]=>
  array(5) {
    ["ts"]=>
    int(1761440400)
    ["time"]=>
    string(24) "2025-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [110]=>
  array(5) {
    ["ts"]=>
    int(1774746000)
    ["time"]=>
    string(24) "2026-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [111]=>
  array(5) {
    ["ts"]=>
    int(1792890000)
    ["time"]=>
    string(24) "2026-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [112]=>
  array(5) {
    ["ts"]=>
    int(1806195600)
    ["time"]=>
    string(24) "2027-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [113]=>
  array(5) {
    ["ts"]=>
    int(1824944400)
    ["time"]=>
    string(24) "2027-10-31T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [114]=>
  array(5) {
    ["ts"]=>
    int(1837645200)
    ["time"]=>
    string(24) "2028-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [115]=>
  array(5) {
    ["ts"]=>
    int(1856394000)
    ["time"]=>
    string(24) "2028-10-29T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [116]=>
  array(5) {
    ["ts"]=>
    int(1869094800)
    ["time"]=>
    string(24) "2029-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [117]=>
  array(5) {
    ["ts"]=>
    int(1887843600)
    ["time"]=>
    string(24) "2029-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [118]=>
  array(5) {
    ["ts"]=>
    int(1901149200)
    ["time"]=>
    string(24) "2030-03-31T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [119]=>
  array(5) {
    ["ts"]=>
    int(1919293200)
    ["time"]=>
    string(24) "2030-10-27T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [120]=>
  array(5) {
    ["ts"]=>
    int(1932598800)
    ["time"]=>
    string(24) "2031-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [121]=>
  array(5) {
    ["ts"]=>
    int(1950742800)
    ["time"]=>
    string(24) "2031-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [122]=>
  array(5) {
    ["ts"]=>
    int(1964048400)
    ["time"]=>
    string(24) "2032-03-28T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [123]=>
  array(5) {
    ["ts"]=>
    int(1982797200)
    ["time"]=>
    string(24) "2032-10-31T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [124]=>
  array(5) {
    ["ts"]=>
    int(1995498000)
    ["time"]=>
    string(24) "2033-03-27T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [125]=>
  array(5) {
    ["ts"]=>
    int(2014246800)
    ["time"]=>
    string(24) "2033-10-30T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [126]=>
  array(5) {
    ["ts"]=>
    int(2026947600)
    ["time"]=>
    string(24) "2034-03-26T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [127]=>
  array(5) {
    ["ts"]=>
    int(2045696400)
    ["time"]=>
    string(24) "2034-10-29T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [128]=>
  array(5) {
    ["ts"]=>
    int(2058397200)
    ["time"]=>
    string(24) "2035-03-25T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [129]=>
  array(5) {
    ["ts"]=>
    int(2077146000)
    ["time"]=>
    string(24) "2035-10-28T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [130]=>
  array(5) {
    ["ts"]=>
    int(2090451600)
    ["time"]=>
    string(24) "2036-03-30T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [131]=>
  array(5) {
    ["ts"]=>
    int(2108595600)
    ["time"]=>
    string(24) "2036-10-26T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
  [132]=>
  array(5) {
    ["ts"]=>
    int(2121901200)
    ["time"]=>
    string(24) "2037-03-29T01:00:00+0000"
    ["offset"]=>
    int(3600)
    ["isdst"]=>
    bool(true)
    ["abbr"]=>
    string(3) "BST"
  }
  [133]=>
  array(5) {
    ["ts"]=>
    int(2140045200)
    ["time"]=>
    string(24) "2037-10-25T01:00:00+0000"
    ["offset"]=>
    int(0)
    ["isdst"]=>
    bool(false)
    ["abbr"]=>
    string(3) "GMT"
  }
}
===DONE===
