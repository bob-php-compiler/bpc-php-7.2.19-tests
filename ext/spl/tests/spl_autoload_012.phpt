--TEST--
SPL: spl_autoload() capturing multiple Exceptions in __autoload
--ARGS--
--bpc-include-file ext/spl/tests/spl_autoload_012.inc \
--FILE--
<?php

function autoload_first($name)
{
  echo __METHOD__ . "\n";
  throw new Exception('first');
}

function autoload_second($name)
{
  echo __METHOD__ . "\n";
  throw new Exception('second');
}

spl_autoload_register('autoload_first');
spl_autoload_register('autoload_second');

try {
    class_exists('ThisClassDoesNotExist');
} catch(Exception $e) {
    do {
        echo $e->getMessage()."\n";
    } while($e = $e->getPrevious());
}

try {
    new ThisClassDoesNotExist;
} catch(Exception $e) {
    do {
        echo $e->getMessage()."\n";
    } while($e = $e->getPrevious());
}

class_exists('ThisClassDoesNotExist');
?>
===DONE===
--EXPECTF--
autoload_first
autoload_second
second
first
autoload_first
autoload_second
second
first
autoload_first
autoload_second

Fatal error: Uncaught Exception: first in %sspl_autoload_012.php:%d
Stack trace:
#0 [internal function]: autoload_first('ThisClassDoesNo...')
#1 [internal function]: spl_autoload_call('ThisClassDoesNo...')
#2 %sspl_autoload_012.php(%d): class_exists('ThisClassDoesNo...', true)
#3 {main}

Next Exception: second in %sspl_autoload_012.php:%d
Stack trace:
#0 [internal function]: autoload_second('ThisClassDoesNo...')
#1 [internal function]: spl_autoload_call('ThisClassDoesNo...')
#2 %sspl_autoload_012.php(%d): class_exists('ThisClassDoesNo...', true)
#3 {main}
  thrown in %sspl_autoload_012.php on line %d
