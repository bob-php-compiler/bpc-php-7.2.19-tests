--TEST--
$session_array = explode(";", session_encode()); should not segfault
--INI--
session.use_cookies=0
session.cache_limiter=
--FILE--
<?php
error_reporting(E_ALL);

$session_array = explode(";", @session_encode());
print "I live\n";
?>
--EXPECT--
I live
