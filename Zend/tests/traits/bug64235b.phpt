--TEST--
Bug #64235 (Insteadof not work for class method in 5.4.11)
--FILE--
<?php

class TestParentClass
{
    public function method()
    {
        print_r('Parent method');
        print "\n";
    }
}

trait TestTrait
{
    public function method()
    {
        print_r('Trait method');
        print "\n";
    }
}

class TestChildClass extends TestParentClass
{
    use TestTrait
    {
        TestTrait::method as methodAlias;
        TestParentClass::method as TestParent;
    }
}

?>
--EXPECTF--
Parse error: trait name should in trait list in %sbug64235b.php on line %d
