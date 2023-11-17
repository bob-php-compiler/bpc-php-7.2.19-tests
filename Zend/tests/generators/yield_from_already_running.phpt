--TEST--
Yielding from the already running Generator should fail (bug #69458)
--FILE--
<?php

function gen() {
	yield from yield;
}

($gen = gen())->send($gen);

?>
--EXPECTF--
Fatal error: Uncaught Error: Cannot resume an already running generator in %s:%d
Stack trace:
#0 %s(%d): Generator->send(Object(Generator))
#1 {main}
  thrown in %s on line %d
