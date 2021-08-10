--TEST--
Bug #61025 (__invoke() visibility not honored)
--FILE--
<?php

Interface InvokeAble {
    static function __invoke();
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method InvokeAble::__invoke() cannot be static in %sbug61025-1.php on line %d
 -- compile-error
