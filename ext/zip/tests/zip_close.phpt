--TEST--
zip_close() function
--FILE--
<?php
$zip = zip_open("test_procedural.zip");
if (!is_resource($zip)) die("Failure");
zip_close($zip);
echo "OK";

?>
--EXPECT--
OK
