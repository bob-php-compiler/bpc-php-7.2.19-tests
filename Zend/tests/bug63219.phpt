--TEST--
Bug #63219 (Segfault when aliasing trait method when autoloader throws excpetion)
--ARGS--
--bpc-include-file Zend/tests/bug63219.inc \
--FILE--
<?php
trait TFoo {
    public function fooMethod(){}
}

class C {
    use TFoo, Typo {
        Typo::fooMethod as tf;
    }
}

echo "okey";
?>
--EXPECTF--
Fatal error: Trait 'Typo' not found in %sbug63219.php on line %d
