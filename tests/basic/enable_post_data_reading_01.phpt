--TEST--
enable_post_data_reading: basic test
--INI--
enable_post_data_reading=0
--POST_RAW--
Content-Type: application/x-www-form-urlencoded
a=1&b=ZYX
--FILE--
<?php
var_dump($_FILES);
var_dump($_POST);
var_dump(file_get_contents("php://input"));
var_dump(file_get_contents("php://input"));
--EXPECTF--
array(0) {
}
array(0) {
}
string(9) "a=1&b=ZYX"
string(9) "a=1&b=ZYX"
