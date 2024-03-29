--TEST--
try { yield } finally { throw }
--FILE--
<?php
function foo($f, $t) {
    for ($i = $f; $i <= $t; $i++) {
        try {
            yield $i;
        } finally {
            throw new Exception;
        }
    }
}
foreach (foo(1, 5) as $x) {
    echo $x, "\n";
}
--EXPECTF--
1

Fatal error: Uncaught Exception in %s:%d
Stack trace:
#0 [internal function]: foo(1, 5)
#1 %s(%d): Generator->next()
#2 {main}
  thrown in %s on line %d
