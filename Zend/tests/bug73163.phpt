--TEST--
Bug #73163 (PHP hangs if error handler throws while accessing undef const in default value)
--FILE--
<?php

function doSomething($value = UNDEFINED) {
}

set_error_handler(function($errno, $errstr) {
    throw new Exception($errstr);
});

doSomething();

?>
--EXPECTF--
Warning: Use of undefined constant UNDEFINED - assumed 'UNDEFINED' (this will throw an Error in a future version of PHP) in %s on line 0

Fatal error: Uncaught Exception: Use of undefined constant UNDEFINED - assumed 'UNDEFINED' (this will throw an Error in a future version of PHP) in %s:%d
Stack trace:
#0 %s(%d): {closure}(2, '%s')
#1 {main}
  thrown in %s on line %d
