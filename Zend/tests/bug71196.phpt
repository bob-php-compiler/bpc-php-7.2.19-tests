--TEST--
Bug #71196 (Memory leak with out-of-order live ranges)
--FILE--
<?php
try  {
        $a = "1";
        array(1, (y().$a.$a) . ($a.$a));
} catch (Error $e) {
        var_dump($e->getMessage());
}
?>
--EXPECTF--
string(%d) "Call to undefined function y()"
