--TEST--
Bug #77608: http_build_query doesn't encode "+" in a float number
--FILE--
<?php

$a = array("x" => 1E+14, "y" => "1E+14");
echo http_build_query($a);

?>
--EXPECT--
x=1.0E%2B14&y=1E%2B14
