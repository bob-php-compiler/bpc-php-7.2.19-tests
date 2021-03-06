--TEST--
braced complex variable replacement test (nowdoc)
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<'ENDOFNOWDOC'
This is nowdoc test #s {$a}, {$b}, {$c['c']}, and {$d->d}.

ENDOFNOWDOC;

$x = <<<'ENDOFNOWDOC'
This is nowdoc test #s {$a}, {$b}, {$c['c']}, and {$d->d}.

ENDOFNOWDOC;

print "{$x}";

?>
--EXPECT--
This is nowdoc test #s {$a}, {$b}, {$c['c']}, and {$d->d}.
This is nowdoc test #s {$a}, {$b}, {$c['c']}, and {$d->d}.
