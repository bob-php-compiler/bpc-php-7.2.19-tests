--TEST--
Combination of foreach, finally and exception (call order)
--FILE--
<?php
class A {
	public $n = 0;
	function __construct($n) {
		$this->n = $n;
	}
	function __destruct() {
		echo "destruct" . $this->n . "\n";
	}
}

foreach (array(new A(1)) as $a) {
    $a = null;
    try {
        foreach (array(new A(2)) as $a) {
            $a = null;
            try {
                foreach (array(new A(3)) as $a) {
                    $a = null;
                    throw new Exception();
                }
            } finally {
                echo "finally1\n";
            }
        }
    } catch (Exception $e) {
        echo "catch\n";
    } finally {
        echo "finally2\n";
    }
}
?>
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

finally1
catch
finally2
destruct1
destruct2
destruct3
