--TEST--
Scoping in destructor call
--FILE--
<?php
        class T
        {
                private $var = array();

                public function add($a)
                {
                        array_push($this->var, $a);
                }

                public function __destruct()
                {
                        print_r($this->var);
                }
        }

        class TT extends T
        {
        }
        $t = new TT();
        $t->add("Hello");
        $t->add("World");
?>
--EXPECTF--
Warning: in %s line 11: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Array
(
    [0] => Hello
    [1] => World
)
