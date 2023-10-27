--TEST--
Bug #70228 (memleak if return in finally block)
--FILE--
<?php
function test() {
    try {
        throw new Exception(1);
    } finally {
        try {
            throw new Exception(2);
        } finally {
            return 42;
        }
    }
}

var_dump(test());
?>
--EXPECT--
Fatal error: Uncaught Exception: 2 in try/bug70228_2.php:7
Stack trace:
#0 try/bug70228_2.php(14): test()
#1 {main}
  thrown in try/bug70228_2.php on line 14
