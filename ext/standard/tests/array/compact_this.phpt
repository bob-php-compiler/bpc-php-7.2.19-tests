--TEST--
compact() with object context
--FILE--
<?php

class A
{
    function test(){
        return compact('this');
    }
}

var_dump((new A)->test());

class B
{
    function test(){
        return compact(array(array('this')));
    }
}

var_dump((new B)->test());

class C
{
    function test(){
        return (function(){ return compact('this'); })();
    }
}

var_dump((new C)->test());

?>
--EXPECTF--
array(1) {
  ["this"]=>
  object(A)#%d (0) {
  }
}
array(1) {
  ["this"]=>
  object(B)#%d (0) {
  }
}
array(1) {
  ["this"]=>
  object(C)#%d (0) {
  }
}
