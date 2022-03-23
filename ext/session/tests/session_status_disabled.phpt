--TEST--
Test session_status() function : disabled
--INI--
session.save_handler=non-existent
--FILE--
<?php

echo "*** Testing session_status() : disabled\n";

var_dump(session_status() == PHP_SESSION_DISABLED);

?>
--EXPECTF--
*** Testing session_status() : disabled
bool(true)
