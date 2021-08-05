--TEST--
empty doc test (heredoc)
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<ENDOFHEREDOC
ENDOFHEREDOC;

$x = <<<ENDOFHEREDOC
ENDOFHEREDOC;

print "{$x}";

?>
--EXPECT--
