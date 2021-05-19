--TEST--
Test mb_get_info() function
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip'); ?>
--INI--
mbstring.encoding_translation=1
mbstring.language=Korean
mbstring.internal_encoding=UTF-8
mbstring.http_input=ISO-8859-1
mbstring.http_output=ISO-8859-15
mbstring.http_output_conv_mimetypes=abc
mbstring.func_overload=2
mbstring.detect_order=UTF-8,ISO-8859-15,ISO-8859-1,ASCII
mbstring.substitute_character=123
mbstring.strict_detection=1
--FILE--
<?php
mb_convert_encoding("\xff\xff", "Shift_JIS", "UCS-2BE");
$result = mb_get_info();
var_dump($result);
foreach (array_keys($result) as $key) {
    var_dump($result[$key], mb_get_info($key));
}
?>
--EXPECT--
array(12) {
  ["internal_encoding"]=>
  string(5) "UTF-8"
  ["func_overload"]=>
  int(0)
  ["func_overload_list"]=>
  string(11) "no overload"
  ["mail_charset"]=>
  string(11) "ISO-2022-KR"
  ["mail_header_encoding"]=>
  string(6) "BASE64"
  ["mail_body_encoding"]=>
  string(4) "7bit"
  ["illegal_chars"]=>
  int(1)
  ["encoding_translation"]=>
  string(3) "Off"
  ["language"]=>
  string(6) "Korean"
  ["detect_order"]=>
  array(4) {
    [0]=>
    string(5) "UTF-8"
    [1]=>
    string(11) "ISO-8859-15"
    [2]=>
    string(10) "ISO-8859-1"
    [3]=>
    string(5) "ASCII"
  }
  ["substitute_character"]=>
  int(123)
  ["strict_detection"]=>
  string(2) "On"
}
string(5) "UTF-8"
string(5) "UTF-8"
int(0)
int(0)
string(11) "no overload"
string(11) "no overload"
string(11) "ISO-2022-KR"
string(11) "ISO-2022-KR"
string(6) "BASE64"
string(6) "BASE64"
string(4) "7bit"
string(4) "7bit"
int(1)
int(1)
string(3) "Off"
string(3) "Off"
string(6) "Korean"
string(6) "Korean"
array(4) {
  [0]=>
  string(5) "UTF-8"
  [1]=>
  string(11) "ISO-8859-15"
  [2]=>
  string(10) "ISO-8859-1"
  [3]=>
  string(5) "ASCII"
}
array(4) {
  [0]=>
  string(5) "UTF-8"
  [1]=>
  string(11) "ISO-8859-15"
  [2]=>
  string(10) "ISO-8859-1"
  [3]=>
  string(5) "ASCII"
}
int(123)
int(123)
string(2) "On"
string(2) "On"
