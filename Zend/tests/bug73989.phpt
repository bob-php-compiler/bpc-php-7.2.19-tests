--TEST--
Bug #73989 (PHP 7.1 Segfaults within Symfony test suite)
--FILE--
<?php
class Cycle
{
    private $thing;

    public function __construct()
    {
		$obj = $this;
        $this->thing = function() {};
    }

    public function __destruct()
    {
		($this->thing)();
    }

}

for ($i = 0; $i < 10000; ++$i) {
    $obj = new Cycle();
}
echo "OK\n";
?>
--EXPECTF--
Warning: in %s line 12: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

OK
