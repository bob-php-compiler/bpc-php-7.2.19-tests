--TEST--
Bug #70713: Use After Free Vulnerability in array_walk()/array_walk_recursive()
--FILE--
<?php

class obj
{
	function __tostring()
	{
		global $arr;

		$arr = 1;
		for ($i = 0; $i < 5; $i++) {
			$v[$i] = 'hi'.$i;
		}

		return 'hi';
	}
}

$arr = array('string' => new obj);
var_dump(array_walk_recursive($arr, 'settype'));
var_dump($arr);
?>
--EXPECTF--
bool(true)
int(1)
