--TEST--
Try finally (with break in do...while)
--FILE--
<?php
function foo () {
    do {
        try {
            try {
            } finally {
                break;
            }
        } catch (Exception $e) {
        } finally {
        }
    } while (0);
}

foo();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: unexpected break in %stry_finally_008.php on line %d
 -- compile-error
