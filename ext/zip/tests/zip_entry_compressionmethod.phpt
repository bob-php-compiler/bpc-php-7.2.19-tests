--TEST--
zip_entry_compressionmethod() function
--FILE--
<?php
$zip = zip_open("test_procedural.zip");
if (!is_resource($zip)) die("Failure");
$entries = 0;
while ($entry = zip_read($zip)) {
  echo zip_entry_compressionmethod($entry)."\n";
}
zip_close($zip);

?>
--EXPECT--
stored
stored
stored
deflated
