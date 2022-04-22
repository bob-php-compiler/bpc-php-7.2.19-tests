--TEST--
SPL: spl_autoload() with inaccessible methods
--INI--
include_path=.
--FILE--
<?php

class MyAutoLoader {

        static protected function noAccess($className) {
        	echo __METHOD__ . "($className)\n";
        }

        static function autoLoad($className) {
        	echo __METHOD__ . "($className)\n";
        }

        function dynaLoad($className) {
        	echo __METHOD__ . "($className)\n";
        }
}

$obj = new MyAutoLoader;

$funcs = array(
	array('MyAutoLoader', 'notExist'),
	array('MyAutoLoader', 'noAccess'),
	array('MyAutoLoader', 'autoLoad'),
	array('MyAutoLoader', 'dynaLoad'),
	array($obj, 'notExist'),
	array($obj, 'noAccess'),
	array($obj, 'autoLoad'),
	array($obj, 'dynaLoad'),
);

foreach($funcs as $idx => $func)
{
	if ($idx) echo "\n";
	try
	{
		var_dump($func);
		spl_autoload_register($func);
		echo "ok\n";
	}
	catch (Exception $e)
	{
		echo $e->getMessage() . "\n";
	}
}

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
array(2) {
  [0]=>
  string(12) "MyAutoLoader"
  [1]=>
  string(8) "notExist"
}
spl_autoload_register() expects parameter 1 to be callable, MyAutoLoader::notExist given

array(2) {
  [0]=>
  string(12) "MyAutoLoader"
  [1]=>
  string(8) "noAccess"
}
spl_autoload_register() expects parameter 1 to be callable, MyAutoLoader::noAccess given

array(2) {
  [0]=>
  string(12) "MyAutoLoader"
  [1]=>
  string(8) "autoLoad"
}
ok

array(2) {
  [0]=>
  string(12) "MyAutoLoader"
  [1]=>
  string(8) "dynaLoad"
}
Passed array specifies a non static method but no object (non-static method MyAutoLoader::dynaLoad() should not be called statically)

array(2) {
  [0]=>
  object(MyAutoLoader)#%d (0) {
  }
  [1]=>
  string(8) "notExist"
}
spl_autoload_register() expects parameter 1 to be callable, MyAutoLoader::notExist given

array(2) {
  [0]=>
  object(MyAutoLoader)#%d (0) {
  }
  [1]=>
  string(8) "noAccess"
}
spl_autoload_register() expects parameter 1 to be callable, MyAutoLoader::noAccess given

array(2) {
  [0]=>
  object(MyAutoLoader)#%d (0) {
  }
  [1]=>
  string(8) "autoLoad"
}
ok

array(2) {
  [0]=>
  object(MyAutoLoader)#%d (0) {
  }
  [1]=>
  string(8) "dynaLoad"
}
ok
===DONE===
