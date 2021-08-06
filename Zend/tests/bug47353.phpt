--TEST--
Bug #47353 (crash when creating a lot of objects in object destructor)
--FILE--
<?php

class A
{
	function __destruct()
	{
		$myArray = array();

		for($i = 1; $i <= 3000; $i++) {
			if(!isset($myArray[$i]))
				$myArray[$i] = array();
			$ref = & $myArray[$i];
			$ref[] = new stdClass();
		}
	}
}

$a = new A();

echo "Done\n";
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Done
