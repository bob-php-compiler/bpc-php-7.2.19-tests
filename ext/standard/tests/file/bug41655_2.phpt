--TEST--
Bug #41655 (open_basedir bypass via glob()) 2/2
--INI--
open_basedir=/
--FILE--
<?php
	$dir = getcwd();
	$a=glob($dir . "/test*csv");
	print_r($a);
?>
--EXPECTF--
Array
(
    [0] => %stest.csv
    [1] => %stest2.csv
    [2] => %stest3.csv
)
