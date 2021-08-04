--TEST--
Don't optimize dynamic call to non-dynamic one if it drops the warning
--FILE--
<?php

function test() {
    ((string) 'extract')(array('a' => 42));
}
test();

?>
--EXPECTF--
Parse error: %s in %s on line 4
