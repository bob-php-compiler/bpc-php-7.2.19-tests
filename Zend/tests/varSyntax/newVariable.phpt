--TEST--
Variable as class name for new expression
--FILE--
<?php

$className = 'stdClass';
$array = array('className' => 'stdClass');
$obj = (object) array('className' => 'stdClass');

class Test {
    public static $className = 'stdClass';
}
$test = 'Test';
$weird = array(0 => (object) array('foo' => 'Test'));

var_dump(new $className);
var_dump(new $array['className']);
var_dump(new $array{'className'});
var_dump(new $obj->className);
var_dump(new Test::$className);
var_dump(new $test::$className);
var_dump(new $weird[0]->foo::$className);

?>
--EXPECTF--
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
