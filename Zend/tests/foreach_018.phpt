--TEST--
Foreach on stdClass with properties looking like mangled properties
--FILE--
<?php

$obj = (object)[
    "\0A\0b" => 42,
    "\0*\0c" => 24,
];

foreach ($obj as $k => $v) {
    var_dump($k, $v);
}

?>
--EXPECT--
string(4) " A b"
int(42)
string(4) " * c"
int(24)
