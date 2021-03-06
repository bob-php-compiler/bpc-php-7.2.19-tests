--TEST--
braced complex variable replacement test (heredoc)
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<ENDOFHEREDOC
This is heredoc test #s {$a}, {$b}, {$c['c']}, and {$d->d}.

ENDOFHEREDOC;

$x = <<<ENDOFHEREDOC
This is heredoc test #s {$a}, {$b}, {$c['c']}, and {$d->d}.

ENDOFHEREDOC;

print "{$x}";

?>
--EXPECT--
This is heredoc test #s 1, 2, 3, and 4.
This is heredoc test #s 1, 2, 3, and 4.
