--TEST--
errmsg: cannot use 'parent' as class name
--FILE--
<?php

class parent {
}

echo "Done\n";
?>
--EXPECTF--
Parse error: Cannot use 'parent' as class name as it is reserved in %s on line %d
