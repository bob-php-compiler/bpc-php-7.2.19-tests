--TEST--
SPL: spl_autoload() and friends
--INI--
include_path=.
--ARGS--
--bpc-include-file ext/spl/tests/testclass --bpc-include-file ext/spl/tests/testclass.class.inc --bpc-include-file ext/spl/tests/testclass.inc --bpc-include-file ext/spl/tests/testclass.php.inc \
--FILE--
<?php

echo "===EMPTY===\n";

var_dump(spl_autoload_extensions());

spl_autoload("TestClass");
if (!class_exists("TestClass")) {
    echo "Class TestClass could not be loaded\n";
}

$test_exts = array(NULL, "1", ".inc,,.php.inc", "");

foreach($test_exts as $exts) {
	echo "===($exts)===\n";
    spl_autoload("TestClass", $exts);
    if (!class_exists("TestClass")) {
        echo "Class TestClass could not be loaded\n";
    }
}

spl_autoload_extensions(".inc,.php.inc");
spl_autoload("TestClass");
if (!class_exists("TestClass")) {
    echo "Class TestClass could not be loaded\n";
}

function TestFunc1($classname)
{
	echo __METHOD__ . "($classname)\n";
}

function TestFunc2($classname)
{
	echo __METHOD__ . "($classname)\n";
}

echo "===SPL_AUTOLOAD()===\n";

spl_autoload_register();

var_dump(spl_autoload_extensions(".inc"));
var_dump(class_exists("TestClass", true));

echo "===REGISTER===\n";

spl_autoload_unregister("spl_autoload");
spl_autoload_register("TestFunc1");
spl_autoload_register("TestFunc2");
spl_autoload_register("TestFunc2"); /* 2nd call ignored */
spl_autoload_extensions(".inc,.class.inc"); /* we do not have spl_autoload_registered yet */

var_dump(class_exists("TestClass", true));

echo "===LOAD===\n";

spl_autoload_register("spl_autoload");
var_dump(class_exists("TestClass", true));

echo "===NOFUNCTION===\n";

try
{
	spl_autoload_register("unavailable_autoload_function");
}
catch(Exception $e)
{
	echo 'Exception: ' . $e->getMessage() . "\n";
}

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
===EMPTY===
string(9) ".inc,.php"
%stestclass.inc
Class TestClass could not be loaded
===()===
Class TestClass could not be loaded
===(1)===
Class TestClass could not be loaded
===(.inc,,.php.inc)===
%stestclass
%stestclass.php.inc
Class TestClass could not be loaded
===()===
Class TestClass could not be loaded
Class TestClass could not be loaded
===SPL_AUTOLOAD()===
string(4) ".inc"
bool(false)
===REGISTER===
testfunc1(TestClass)
testfunc2(TestClass)
bool(false)
===LOAD===
testfunc1(TestClass)
testfunc2(TestClass)
%stestclass.class.inc
bool(true)
===NOFUNCTION===
Exception: spl_autoload_register() expects parameter 1 to be callable, unavailable_autoload_function given
===DONE===
