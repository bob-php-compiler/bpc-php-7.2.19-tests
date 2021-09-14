--TEST--
errmsg: cannot use 'self' as class name
--FILE--
<?php

class self {
}

echo "Done\n";
?>
--EXPECTF--
Parse error: Cannot use 'self' as class name as it is reserved in %s on line %d
