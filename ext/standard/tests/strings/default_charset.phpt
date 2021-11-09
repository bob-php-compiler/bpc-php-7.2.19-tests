--TEST--
default_charset and htmlentities/htmlspecialchars/html_entity_decode
--INI--
default_charset=UTF-8
--FILE--
<?php
echo "*** Default php.ini value ***\n";
var_dump(ini_get('default_charset'),
		 ini_get('internal_encoding'),
		 ini_get('input_encoding'),
		 ini_get('output_encoding')
	);


echo "*** Runtime change of default_charset ***\n";
var_dump(ini_set('default_charset', 'cp1252'));

echo "*** Test with updated default_charset ***\n";
var_dump(ini_get('default_charset'),
		 ini_get('internal_encoding'),
		 ini_get('input_encoding'),
		 ini_get('output_encoding')
	);

var_dump(htmlentities("\xA3", ENT_HTML5));
var_dump(htmlentities("\xA3", ENT_HTML5, 'cp1252'));

var_dump(bin2hex(html_entity_decode("&pound;", ENT_HTML5)));
var_dump(bin2hex(html_entity_decode("&pound;", ENT_HTML5, 'cp1252')));

// Set internal_encoding to empty and try again
echo "*** Change internal_encoding to empty ***\n";
var_dump(ini_set('internal_encoding', ''));
var_dump(ini_get('default_charset'),
		 ini_get('internal_encoding'),
		 ini_get('input_encoding'),
		 ini_get('output_encoding')
	);

var_dump(htmlentities("\xA3", ENT_HTML5));
var_dump(htmlentities("\xA3", ENT_HTML5, 'cp1252'));
var_dump(bin2hex(html_entity_decode("&pound;", ENT_HTML5)));
var_dump(bin2hex(html_entity_decode("&pound;", ENT_HTML5, 'cp1252')));

echo "*** Update input/output_encoding ***\n";
var_dump(ini_set('input_encoding', 'ISO-8859-1'));
var_dump(ini_set('output_encoding', 'ISO-8859-1'));
var_dump(ini_get('default_charset'),
		 ini_get('internal_encoding'),
		 ini_get('input_encoding'),
		 ini_get('output_encoding')
	);

// Should not be affected
var_dump(htmlentities("\xA3", ENT_HTML5));
var_dump(htmlentities("\xA3", ENT_HTML5, 'cp1252'));
var_dump(bin2hex(html_entity_decode("&pound;", ENT_HTML5)));
var_dump(bin2hex(html_entity_decode("&pound;", ENT_HTML5, 'cp1252')));

echo "Done\n";

?>
--EXPECT--
*** Default php.ini value ***
string(5) "UTF-8"
bool(false)
bool(false)
bool(false)
*** Runtime change of default_charset ***
string(5) "UTF-8"
*** Test with updated default_charset ***
string(6) "cp1252"
bool(false)
bool(false)
bool(false)
string(7) "&pound;"
string(7) "&pound;"
string(2) "a3"
string(2) "a3"
*** Change internal_encoding to empty ***
bool(false)
string(6) "cp1252"
bool(false)
bool(false)
bool(false)
string(7) "&pound;"
string(7) "&pound;"
string(2) "a3"
string(2) "a3"
*** Update input/output_encoding ***
bool(false)
bool(false)
string(6) "cp1252"
bool(false)
bool(false)
bool(false)
string(7) "&pound;"
string(7) "&pound;"
string(2) "a3"
string(2) "a3"
Done
