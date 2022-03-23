--TEST--
session_unset() without a initialized session
--FILE--
<?php
error_reporting(E_ALL);
session_unset();
print "ok\n";
--EXPECT--
ok
