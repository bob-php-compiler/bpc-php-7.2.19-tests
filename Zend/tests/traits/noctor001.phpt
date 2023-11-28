--TEST--
Don't mark trait methods as constructor
--FILE--
<?php
trait Foo {
    public function Foo() {
        echo "foo\n";
    }
}

class Bar {
    use Foo;
    public function Bar() {
        echo "bar\n";
    }
}

$o = new Bar;

?>
--EXPECTF--
Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; Bar has a deprecated constructor in %s on line %d
bar
