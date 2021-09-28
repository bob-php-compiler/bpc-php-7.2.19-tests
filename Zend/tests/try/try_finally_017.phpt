--TEST--
Exception during break 2 with multiple try/catch
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
        try {
            $break = false;
            foreach (new A as $value) {
                try {
                    $break = true;
                    break;
                } catch (Exception $e) {
                    echo "catch1\n";
                }/* finally {
                    echo "finally1\n";
                }*/
            }
            if ($break) {
                break;
            }
        } catch (Exception $e) {
            echo "catch2\n";
        }/* finally {
            echo "finally2\n";
        }*/
    }
}

foo();
?>
===DONE===
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

===DONE===

Fatal error: Uncaught Exception in %stry_finally_017.php:8
Stack trace:
#0 %stry_finally_017.php(40): A->__destruct()
#1 {main}
  thrown in %stry_finally_017.php on line 40
