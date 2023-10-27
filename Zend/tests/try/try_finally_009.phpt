--TEST--
Try finally (with for continue)
--FILE--
<?php
function foo () {
    for($i = 0; $i < 5; $i++) {
        do {
            try {
                try {
                } finally {
                }
            } catch (Exception $e) {
            } finally {
              continue;
            }
        } while (0);
    }
}

foo();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: unexpected continue in %stry_finally_009.php on line %d
 -- compile-error
