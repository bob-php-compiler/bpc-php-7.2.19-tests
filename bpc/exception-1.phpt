--TEST--
Exception: ERROR:unwind-protect: exit out of dynamic scope
--FILE--
<?php

try {
    try {
        throw new Error('error');
    } catch (Exception $e) {
        // catch nothing
    }
} catch (Throwable $e) {
    // catch error
    var_dump($e->getMessage());
}

throw $e; // should handle by default exception handler
?>
--EXPECTF--
string(5) "error"

Fatal error: Uncaught Error: error in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
