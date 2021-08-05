--TEST--
braces variable replacement test (heredoc)
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<ENDOFHEREDOC
This is heredoc test #{$a}.

ENDOFHEREDOC;

$x = <<<ENDOFHEREDOC
This is heredoc test #{$b}.

ENDOFHEREDOC;

print "{$x}";

?>
--EXPECT--
This is heredoc test #1.
This is heredoc test #2.
