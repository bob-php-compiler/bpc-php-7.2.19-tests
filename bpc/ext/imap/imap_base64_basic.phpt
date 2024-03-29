--TEST--
Test imap_base64() function : basic functionality
--FILE--
<?php
/* Prototype  : string imap_base64  ( string $text  )
 * Description: Decode BASE64 encoded text.
 * Source code: ext/imap/php_imap.c
 */

echo "*** Testing imap_base64() : basic functionality ***\n";

$str = 'This is an example string to be base 64 encoded';
$base64 = base64_encode($str);
if (imap_base64($base64) == $str) {
	echo "TEST PASSED\n";
} else {
	echo "TEST FAILED";
}

$str = '!£$%^&*()_+-={][];;@~#?/>.<,';
$base64 = base64_encode($str);
if (imap_base64($base64) == $str) {
	echo "TEST PASSED\n";
} else {
	echo "TEST FAILED";
}

$hex = 'x00\x01\x02\x03\x04\x05\x06\xFA\xFB\xFC\xFD\xFE\xFF';
$base64 = base64_encode($hex);
if (imap_base64($base64) == $hex) {
	echo "TEST PASSED\n";
} else {
	echo "TEST FAILED";
}

?>
===Done===
--EXPECT--
*** Testing imap_base64() : basic functionality ***
TEST PASSED
TEST PASSED
TEST PASSED
===Done===
