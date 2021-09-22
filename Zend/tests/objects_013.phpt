--TEST--
implementing the same interface twice
--FILE--
<?php

interface foo {
}

class bar implements foo, foo {
}

echo "Done\n";
?>
--EXPECTF--
Parse error: interface duplicated in %s on line %d
