--TEST--
Torture the T_END_HEREDOC rules with variable expansions (heredoc)
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';
$fooledYou = '';

print <<<ENDOFHEREDOC
{$fooledYou}ENDOFHEREDOC{$fooledYou}
ENDOFHEREDOC{$fooledYou}
{$fooledYou}ENDOFHEREDOC

ENDOFHEREDOC;

$x = <<<ENDOFHEREDOC
{$fooledYou}ENDOFHEREDOC{$fooledYou}
ENDOFHEREDOC{$fooledYou}
{$fooledYou}ENDOFHEREDOC

ENDOFHEREDOC;

print "{$x}";

?>
--EXPECT--
ENDOFHEREDOC
ENDOFHEREDOC
ENDOFHEREDOC
ENDOFHEREDOC
ENDOFHEREDOC
ENDOFHEREDOC
