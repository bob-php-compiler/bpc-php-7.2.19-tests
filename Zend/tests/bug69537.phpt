--TEST--
Bug #69537 (__debugInfo with empty string for key gives error)
--SKIPIF--
skip not support __debugInfo()
--FILE--
<?php
class Foo {

    public function __debugInfo(){
        return ['' => 1];
    }
}

var_dump(new Foo);
?>
--EXPECTF--
object(Foo)#%d (%d) {
  [""]=>
  int(1)
}
