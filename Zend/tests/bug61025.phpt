--TEST--
Bug #61025 (__invoke() visibility not honored)
--FILE--
<?php

class Bar {
    private function __invoke() {
        return __CLASS__;
    }
}

$b = new Bar;
echo $b();

echo $b->__invoke();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method Bar::__invoke() must have public visibility in %sbug61025.php on line %d
 -- compile-error
