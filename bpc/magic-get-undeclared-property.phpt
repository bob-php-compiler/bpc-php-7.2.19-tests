--TEST--
function optional param with var arity test
--FILE--
<?php

class A
{
    public function __get($name)
    {
        if ('attributes' === $name) {
            $this->attributes = array();
            return $this->attributes;
        }
        return null;
    }
}

$o = new A;
var_dump($o->attributes);

?>
--EXPECT--
array(0) {
}
