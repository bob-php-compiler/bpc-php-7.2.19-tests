--TEST--
Test header_register_callback
--SKIPIF--
skip TODO
--FILE--
<?php
header_register_callback(function() { echo "sent";});
?>
--EXPECT--
sent
