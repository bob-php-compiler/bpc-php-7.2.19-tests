--TEST--
Shift_JIS request
--SKIPIF--
skip no ini mbstring.http_*, mbstring.encoding_translation
--INI--
file_uploads=1
mbstring.encoding_translation=1
mbstring.http_input=Shift_JIS
mbstring.internal_encoding=UTF-8
--POST_RAW--
Content-Type: multipart/form-data; boundary=---------------------------20896060251896012921717172737
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; name="\\\"

h~t@\
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; name="pics"; filename="file1.txt"
Content-Type: text/plain

file1

-----------------------------20896060251896012921717172737--
--FILE--
<?php
var_dump($_FILES);
var_dump($_POST);
?>
--EXPECTF--
array(1) {
  ["pics"]=>
  array(5) {
    ["name"]=>
    string(9) "file1.txt"
    ["type"]=>
    string(10) "text/plain"
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(6)
  }
}
array(1) {
  ["δΊθθ½"]=>
  string(18) "γγ¬γγγ‘γ½"
}
