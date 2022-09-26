--TEST--
zip_entry_close() function: simple and double call
--FILE--
<?php
$zip    = zip_open("test_procedural.zip");
$entry  = zip_read($zip);
echo "entry_close: "; var_dump(zip_entry_close($entry));
echo "entry_close: "; var_dump(zip_entry_close($entry));
zip_close($zip);
?>
Done
--EXPECTF--
entry_close: bool(true)
entry_close:
Warning: zip_entry_close(): supplied resource is not a valid Zip Entry resource in %s
bool(false)
Done
