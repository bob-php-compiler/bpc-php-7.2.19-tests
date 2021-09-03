--TEST--
Bug #71695 (Global variables are reserved before execution)
--FILE--
<?php
function provideGlobals() {
	var_dump(array_key_exists("foo", $GLOBALS));
	var_dump(isset($GLOBALS["foo"]));
	$GLOBALS += array("foo" => "foo");
}

provideGlobals();
echo $foo;
?>
--EXPECTF--
bool(true)
bool(false)

Warning: bpc `$GLOBALS += array();` may not worked as expected because of variables declared early in %sbug71695.php on line 5
