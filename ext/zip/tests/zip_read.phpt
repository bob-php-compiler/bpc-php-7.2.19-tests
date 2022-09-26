--TEST--
zip_read() function
--FILE--
<?php
$zip = zip_open("test_procedural.zip");
if (!is_resource($zip)) die("Failure");
$entries = 0;
while ($entry = zip_read($zip)) {
  $entries++;
}
zip_close($zip);
echo "$entries entries";

?>
--EXPECT--
4 entries
