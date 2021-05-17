--TEST--
Bug #52931 (strripos not overloaded with function overloading enabled)
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--FILE--
<?php

$string = '<body>Umlauttest öüä</body>';

var_dump(strlen($string));
var_dump(mb_strlen($string));

var_dump(strripos($string, '</body>'));
var_dump(mb_strripos($string, '</body>'));

?>
--EXPECT--
int(30)
int(27)
int(23)
int(20)
