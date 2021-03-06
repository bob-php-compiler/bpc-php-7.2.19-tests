--TEST--
crypt() function - characters > 0x80
--SKIPIF--
<?php
if (!function_exists('crypt')) {
        die("SKIP crypt() is not available");
}
?>
--FILE--
<?php
var_dump(crypt("À1234abcd", "99"));
var_dump(crypt("À9234abcd", "99"));
var_dump(defined('CRYPT_EXT_DES') ? crypt("À1234abcd", "_01234567") : "_01234567IBjxKliXXRQ");
var_dump(defined('CRYPT_EXT_DES') ? crypt("À9234abcd", "_01234567") : "_012345678OSGpGQRVHA");
--EXPECT--
string(13) "99PxawtsTfX56"
string(13) "99jcVcGxUZOWk"
string(20) "_01234567IBjxKliXXRQ"
string(20) "_012345678OSGpGQRVHA"
