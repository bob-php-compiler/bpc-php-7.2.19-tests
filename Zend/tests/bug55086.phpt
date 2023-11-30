--TEST--
Bug #55086 (Namespace alias does not work inside trait's use block)
--FILE--
<?php
    class Foo extends Exception {}

    trait N1\T1 {
        public function hello() { return 'hello from t1'; }
    }

    trait N1\T2 {
        public function hello() { return 'hello from t2'; }
    }

    class N2\A {
        use N1\T1, N1\T2 {
            N1\T1::hello insteadof N1\T2;
            N1\T1::hello as foo;
        }
    }
    $a = new N2\A;
    echo $a->hello(), PHP_EOL;
    echo $a->foo(), PHP_EOL;
    try {
    } catch(Foo $e)
    {
    }
?>
--EXPECT--
hello from t1
hello from t1
