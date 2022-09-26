--TEST--
zip_open() function
--FILE--
<?php
$zip = zip_open("test_procedural.zip");

echo is_resource($zip) ? "OK" : "Failure";

?>
--EXPECT--
OK
