--TEST--
Bug #73181: parse_str() without a second argument leads to crash
--FILE--
<?php

function x() {
    parse_str("1&x");
    var_dump(${1}, $x);
}

x();

?>
--EXPECTF--
Deprecated: parse_str(): Calling parse_str() without the result argument is deprecated in %s on line %d
string(0) ""
string(0) ""
