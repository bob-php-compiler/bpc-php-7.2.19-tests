--TEST--
Encoding INI test
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--INI--
error_reporting=24575
default_charset=Shift_JIS
internal_encoding=
input_encoding=
output_encoding=
mbstring.internal_encoding=Shift_JIS
mbstring.http_input=Shift_JIS
mbstring.http_output=Shift_JIS
--FILE--
<?php
// E_ALL & ~E_DEPRECATED = 24575
echo "Getting INI\n";
var_dump(ini_get('default_charset'));
var_dump(ini_get('internal_encoding'));
var_dump(ini_get('input_encoding'));
var_dump(ini_get('output_encoding'));

var_dump(ini_get('mbstring.internal_encoding'));
var_dump(mb_internal_encoding());
var_dump(ini_get('mbstring.http_input'));
var_dump(ini_get('mbstring.http_output'));

echo "Setting INI\n";
var_dump(ini_set('default_charset', 'UTF-8'));
var_dump(ini_set('internal_encoding', 'UTF-8'));
var_dump(ini_set('input_encoding', 'UTF-8'));
var_dump(ini_set('output_encoding', 'UTF-8'));
var_dump(ini_set('mbstring.internal_encoding', 'UTF-8'));
var_dump(ini_set('mbstring.http_input', 'UTF-8'));
var_dump(ini_set('mbstring.http_output', 'UTF-8'));

echo "Getting INI\n";
var_dump(ini_get('default_charset'));
var_dump(ini_get('internal_encoding'));
var_dump(ini_get('input_encoding'));
var_dump(ini_get('output_encoding'));

var_dump(ini_get('mbstring.internal_encoding'));
var_dump(mb_internal_encoding());
var_dump(ini_get('mbstring.http_input'));
var_dump(ini_get('mbstring.http_output'));
--EXPECT--
Getting INI
string(9) "Shift_JIS"
bool(false)
bool(false)
bool(false)
string(9) "Shift_JIS"
string(4) "SJIS"
bool(false)
bool(false)
Setting INI
string(9) "Shift_JIS"
bool(false)
bool(false)
bool(false)
string(9) "Shift_JIS"
bool(false)
bool(false)
Getting INI
string(5) "UTF-8"
bool(false)
bool(false)
bool(false)
string(5) "UTF-8"
string(5) "UTF-8"
bool(false)
bool(false)
