--TEST--
Bug #55500 (Corrupted $_FILES indices lead to security concern)
--INI--
file_uploads=1
error_reporting=E_ALL&~E_NOTICE
upload_max_filesize=1024
max_file_uploads=10
--POST_RAW--
Content-Type: multipart/form-data; boundary=---------------------------20896060251896012921717172737
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; name="file[]"; filename="file1.txt"
Content-Type: text/plain-file1

1
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; name="file[[type]"; filename="file2.txt"
Content-Type: text/plain-file2

2
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; name="file[[name]"; filename="file3.txt"
Content-Type: text/plain-file3

3
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; name="file[name]["; filename="file4.txt"
Content-Type: text/plain-file3

4
-----------------------------20896060251896012921717172737--
--FILE--
<?php
var_dump($_FILES);
var_dump($_POST);
?>
--EXPECTF--
array(4) {
  ["file"]=>
  array(5) {
    ["name"]=>
    array(1) {
      [0]=>
      string(9) "file1.txt"
    }
    ["type"]=>
    array(1) {
      [0]=>
      string(16) "text/plain-file1"
    }
    ["tmp_name"]=>
    array(1) {
      [0]=>
      string(%d) "%s"
    }
    ["error"]=>
    array(1) {
      [0]=>
      int(0)
    }
    ["size"]=>
    array(1) {
      [0]=>
      int(1)
    }
  }
  ["file[[type]"]=>
  array(5) {
    ["name"]=>
    string(9) "file2.txt"
    ["type"]=>
    string(16) "text/plain-file2"
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["file[[name]"]=>
  array(5) {
    ["name"]=>
    string(9) "file3.txt"
    ["type"]=>
    string(16) "text/plain-file3"
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
  ["file[name]["]=>
  array(5) {
    ["name"]=>
    string(9) "file4.txt"
    ["type"]=>
    string(16) "text/plain-file3"
    ["tmp_name"]=>
    string(%d) "%s"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1)
  }
}
array(0) {
}
