--TEST--
try { return } finally { return } in generator
--FILE--
<?php

function gen() {
    try {
        try {
            echo "before return\n";
            return;
            echo "after return\n";
        } finally {
            echo "before return in inner finally\n";
            return;
            echo "after return in inner finally\n";
        }
    } finally {
        echo "outer finally run\n";
    }

    echo "code after finally\n";

    yield; // force generator
}

$gen = gen();
$gen->rewind(); // force run

?>
--EXPECTF--
before return
before return in inner finally
outer finally run

Fatal error: Uncaught Exception: Cannot rewind a generator that was already run in %sreturn_return.php:24
Stack trace:
#0 %sreturn_return.php(24): Generator->rewind()
#1 {main}
  thrown in %sreturn_return.php on line 24
