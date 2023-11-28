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
        TestParentClass::method insteadof TestTrait;
    }
}
?>
--EXPECTF--
Parse error: selected and dropped should in trait list in %sbug64235.php on line %d
