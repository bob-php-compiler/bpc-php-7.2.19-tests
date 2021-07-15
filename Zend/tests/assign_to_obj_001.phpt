--TEST--
assgin to object leaks with ref
--SKIPIF--
skip unsupported return reference from function/method
--FILE--
<?php
function &a($i) {
    $a = "str". $i ."ing";
    return $a;
}

class A {
    public function test() {
        $this->a = a(1);
        unset($this->a);
    }
}

$a = new A;

$a->test();
$a->test();
echo "okey";
?>
--EXPECT--
okey
