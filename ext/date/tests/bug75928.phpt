--TEST--
Bug #75928: Argument 2 for `DateTimeZone::listIdentifiers()` should accept `null`
--FILE--
<?php
var_dump(is_array(DateTimeZone::listIdentifiers(DateTimeZone::ALL, null)));
?>
--EXPECT--
bool(true)
