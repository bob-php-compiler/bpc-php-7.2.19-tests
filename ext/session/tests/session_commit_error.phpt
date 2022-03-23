--TEST--
Test session_commit() function : error functionality
--FILE--
<?php

echo "*** Testing session_commit() : error functionality ***\n";

var_dump(session_commit(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function session_commit(): 0 at most, 1 provided in %s on line %d
 -- compile-error
