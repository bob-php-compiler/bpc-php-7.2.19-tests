--TEST--
Bug #71334: Cannot access array keys while uksort()
--FILE--
<?php

class myClass
{
	private $a = array(
		'foo-test' => array(1),
		'-' => array(2),
		'bar-test' => array(3)
	);

	private function _mySort($x, $y)
	{
		if (!isset($this->a[$x])) {
			throw new Exception('Missing X: "' . $x . '"');
		}

		if (!isset($this->a[$y])) {
			throw new Exception('Missing Y: "' . $y . '"');
		}

		return $x < $y;
	}

	public function __construct()
	{
		uksort($this->a, array($this, '_mySort'));
	}
}

new myClass();
echo "Done";

?>
--EXPECT--
Done
