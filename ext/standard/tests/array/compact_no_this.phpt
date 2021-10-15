--TEST--
compact() without object context
--FILE--
<?php

var_dump(compact('this'));

var_dump((function(){ return compact('this'); })());

?>
--EXPECT--
array(0) {
}
array(0) {
}
