--TEST--
basic nowdoc syntax
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<'ENDOFNOWDOC'
This is a nowdoc test.

ENDOFNOWDOC;

$x = <<<'ENDOFNOWDOC'
This is another nowdoc test.
With another line in it.
ENDOFNOWDOC;

print "{$x}";

?>
--EXPECT--
This is a nowdoc test.
This is another nowdoc test.
With another line in it.
