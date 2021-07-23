--TEST--
Bug #72216 (Return by reference with finally is not memory safe)
--SKIPIF--
skip unsupported return reference from function/method
--FILE--
<?php
function &test() {
    $a = ["ok"];
    try {
        return $a[0];
    } finally {
        $a[""] = 42;
    }
}
var_dump(test());
?>
--EXPECT--
string(2) "ok"
