--TEST--
compact() without object context
--FILE--
<?php

class C {
    function test(){
        return (static function(){ return compact('this'); })();
    }
}

var_dump(
    (new C)->test()
);

var_dump(compact('this'));

var_dump((function(){ return compact('this'); })());

?>
--EXPECT--
array(0) {
}
array(0) {
}
array(0) {
}
