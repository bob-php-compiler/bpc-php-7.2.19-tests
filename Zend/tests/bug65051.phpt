--TEST--
Bug #65051: count() off by one inside unset()
--FILE--
<?php

class Foo {
    public $array;

    public function __destruct() {
        var_dump(count($this->array[0]));
        var_dump($this->array[0]);
    }
}

$array = array(array(new Foo));
$array[0][0]->array =& $array;
unset($array[0][0]);

?>
--EXPECTF--
Warning: in %s line 6: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

int(0)
array(0) {
}
