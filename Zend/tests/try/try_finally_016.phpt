--TEST--
Exception during break 2
--FILE--
<?php

class A {
    public $a = 1;
    public $b = 2;

    public function __destruct() {
        throw new Exception;
    }
}

function foo() {
    foreach (array(0) as $_) {
        $break = false;
        foreach (new A as $value) {
            try {
                $break = true;
                break;
            } catch (Exception $e) {
                echo "catch\n";
            }/* finally {
                echo "finally\n";
            }*/
        }
        if ($break) {
            break;
        }
    }
}

try {
    foo();
} catch (Exception $e) {
    echo "outer catch\n";
}
?>
===DONE===
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

===DONE===

Fatal error: Uncaught Exception in %stry_finally_016.php:8
Stack trace:
#0 %stry_finally_016.php(38): A->__destruct()
#1 {main}
  thrown in %stry_finally_016.php on line 38
