--TEST--
Bug #51822 (Segfault with strange __destruct() for static class variables)
--FILE--
<?php
class DestructableObject
{
	public function __destruct()
	{
		echo "2\n";
	}
}

class DestructorCreator
{
	public function __destruct()
	{
		$this->test = new DestructableObject;
		echo "1\n";
	}
}

class Test
{
	public static $mystatic;
}

// Uncomment this to avoid segfault
//Test::$mystatic = new DestructorCreator();

$x = new Test();

if (!isset(Test::$mystatic))
	Test::$mystatic = new DestructorCreator();

echo "bla\n";
?>
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 12: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

bla
1
2
