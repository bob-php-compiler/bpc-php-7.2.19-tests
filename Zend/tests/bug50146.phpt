--TEST--
Bug #50146 (property_exists: Closure object cannot have properties)
--FILE--
<?php

$obj = function(){};

var_dump(property_exists($obj,'foo'));

var_dump(isset($obj->a));

?>
--EXPECTF--
bool(false)

Fatal error: Uncaught Error: Closure object cannot have properties in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
