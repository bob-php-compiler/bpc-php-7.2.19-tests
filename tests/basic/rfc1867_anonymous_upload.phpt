--TEST--
rfc1867 anonymous upload
--INI--
file_uploads=1
upload_max_filesize=1024
max_file_uploads=10
--POST_RAW--
Content-Type: multipart/form-data; boundary=---------------------------20896060251896012921717172737
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; filename="file1.txt"
Content-Type: text/plain-file1

1
-----------------------------20896060251896012921717172737
Content-Disposition: form-data; filename="file2.txt"
Content-Type: text/plain-file2

2
-----------------------------20896060251896012921717172737--
--FILE--
<?php
var_dump($_FILES);
var_dump($_POST);
?>
--EXPECTF--
Warning: Invalid Content-Disposition: %s in Unknown on line 0
array(0) {
}
array(0) {
}
