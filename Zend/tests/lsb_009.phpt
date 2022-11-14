--TEST--
ZE2 Late Static Binding interface name "static"
--FILE--
<?php
interface static {
}
--EXPECTF--
Parse error: (unexpected token `static') in %s on line %d
