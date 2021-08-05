--TEST--
empty doc test (nowdoc)
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<'ENDOFNOWDOC'
ENDOFNOWDOC;

$x = <<<'ENDOFNOWDOC'
ENDOFNOWDOC;

print "{$x}";

?>
--EXPECT--
