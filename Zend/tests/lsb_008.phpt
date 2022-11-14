--TEST--
ZE2 Late Static Binding class name "static"
--FILE--
<?php
class static {
}
--EXPECTF--
Parse error: (unexpected token `static') in %s on line %d
