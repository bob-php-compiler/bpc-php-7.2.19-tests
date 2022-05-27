--TEST--
Bug #42718 - 2 (unsafe_raw filter not applied when configured as default filter)
--SKIPIF--
skip no ini filter.default filter.default_flags
--INI--
display_errors=0
filter.default=unsafe_raw
filter.default_flags=
--GET--
a=1%00
--FILE--
<?php
echo ini_get('filter.default') . "\n";
echo ini_get('filter.default_flags') . "\n";
?>
--EXPECT--
unsafe_raw
