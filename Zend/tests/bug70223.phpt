--TEST--
Bug #70223 (Incrementing value returned by magic getter)
--SKIPIF--
skip not supported return reference from function/method
--FILE--
<?php

class A {

    private $foo = 0;

    public function &__get($foo){ return $this->foo; }

}

$a = new A;
echo $a->f++;
echo $a->f++;
echo $a->f++;
?>
--EXPECT--
012
