--TEST--
extending the same interface twice
--FILE--
<?php

interface foo {
}

interface bar extends foo, foo {
}

echo "Done\n";
?>
--EXPECTF--
Parse error: interface duplicated in %s on line %d
