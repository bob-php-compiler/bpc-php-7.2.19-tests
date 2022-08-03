--TEST--
Test default_charset handling
--INI--
error_reporting=24575
default_charset=UTF-8
internal_encoding=
input_encoding=
output_encoding=
iconv.internal_encoding=
iconv.input_encoding=
iconv.output_encoding=
--FILE--
<?php
// E_ALL & ~E_DEPRECATED = 24575
echo "*** Testing default_charset handling ***\n";

echo "--- Get php.ini values ---\n";
var_dump(ini_get('default_charset'),
		 ini_get('internal_encoding'),
		 ini_get('input_encoding'),
		 ini_get('output_encoding'),
		 ini_get('iconv.internal_encoding'),
		 ini_get('iconv.input_encoding'),
		 ini_get('iconv.output_encoding'));

echo "\n--- Altering encodings ---\n";
var_dump(ini_set('default_charset', 'ISO-8859-1'));

echo "\n--- results of alterations ---\n";
var_dump(ini_get('default_charset'),
		 ini_get('internal_encoding'),
		 ini_get('input_encoding'),
		 ini_get('output_encoding'),
		 ini_get('iconv.internal_encoding'),
		 ini_get('iconv.input_encoding'),
		 ini_get('iconv.output_encoding'));

/*
echo "\n--- Altering encodings ---\n";
var_dump(ini_set('default_charset', 'ISO-8859-1'),
		 ini_set('internal_encoding'),
		 ini_set('input_encoding'),
		 ini_set('output_encoding'),
		 ini_set('iconv.internal_encoding'),
		 ini_set('iconv.input_encoding'),
		 ini_set('iconv.output_encoding'));
*/

echo "Done";
?>
--EXPECTF--
*** Testing default_charset handling ***
--- Get php.ini values ---
string(5) "UTF-8"
bool(false)
bool(false)
bool(false)
string(0) ""
bool(false)
bool(false)

--- Altering encodings ---
string(5) "UTF-8"

--- results of alterations ---
string(10) "ISO-8859-1"
bool(false)
bool(false)
bool(false)
string(0) ""
bool(false)
bool(false)
Done
