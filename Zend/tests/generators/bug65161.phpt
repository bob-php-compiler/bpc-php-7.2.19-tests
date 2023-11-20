--TEST--
Bug #65161: Generator + autoload + syntax error = segfault
--FILE--
<?php

function autoload($class) {
    foo();
}
spl_autoload_register('autoload');

function testGenerator() {
    $class = 'SyntaxError';
    new $class('param');
    yield;
}

foreach (testGenerator() as $i);

?>
--EXPECTF--
Fatal error: Uncaught Error: Call to undefined function foo() in %s:%d
Stack trace:
#0 [internal function]: autoload('SyntaxError')
#1 %s(%d): spl_autoload_call('SyntaxError')
#2 [internal function]: testgenerator()
#3 %s(%d): Generator->rewind()
#4 {main}
  thrown in %s on line %d
