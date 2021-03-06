--TEST--
Torture the T_END_HEREDOC rules (heredoc)
--SKIPIF--
skip invalid test
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<ENDOFHEREDOC
ENDOFHEREDOC    ;
    ENDOFHEREDOC;
ENDOFHEREDOC    
    ENDOFHEREDOC
$ENDOFHEREDOC;

ENDOFHEREDOC;

$x = <<<ENDOFHEREDOC
ENDOFHEREDOC    ;
    ENDOFHEREDOC;
ENDOFHEREDOC    
    ENDOFHEREDOC
$ENDOFHEREDOC;

ENDOFHEREDOC;

print "{$x}";

?>
--EXPECTF--
Notice: Undefined variable: ENDOFHEREDOC in %s on line %d
ENDOFHEREDOC    ;
    ENDOFHEREDOC;
ENDOFHEREDOC    
    ENDOFHEREDOC
;

Notice: Undefined variable: ENDOFHEREDOC in %s on line %d
ENDOFHEREDOC    ;
    ENDOFHEREDOC;
ENDOFHEREDOC    
    ENDOFHEREDOC
;
