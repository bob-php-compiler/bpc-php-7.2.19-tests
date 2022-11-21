--TEST--
Cannot use $this as lexical variable
--FILE--
<?php

class Foo {
    public function fn() {
        return function() use ($this) {};
    }
}

?>
--EXPECTF--
Parse error: Cannot use $this as parameter in %s on line %d
