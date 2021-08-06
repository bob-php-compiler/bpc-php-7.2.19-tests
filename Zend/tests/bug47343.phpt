--TEST--
Bug #47343 (gc_collect_cycles causes a segfault when called within a destructor in one case)
--FILE--
<?php
class A
{
	public function __destruct()
	{
		gc_collect_cycles();
	}

	public function getB()
	{
		$this->data['foo'] = new B($this);
		$this->data['bar'] = new B($this);
		// Return either of the above
		return $this->data['foo'];
	}
}

class B
{
	public function __construct($A)
	{
		$this->A = $A;
	}

	public function __destruct()
	{
	}
}

for ($i = 0; $i < 2; $i++)
{
	$Aobj = new A;
	$Bobj = $Aobj->getB();
	unset($Bobj);
	unset($Aobj);
}

echo "DONE\n";
?>
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 25: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

DONE
