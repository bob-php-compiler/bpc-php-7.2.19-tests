--TEST--
zip_entry_read() function
--FILE--
<?php
$zip    = zip_open("test_procedural.zip");
$entry  = zip_read($zip);
if (!$entry) die("Failure");
echo zip_entry_read($entry);
zip_entry_close($entry);
zip_close($zip);

?>
--EXPECT--
foo
