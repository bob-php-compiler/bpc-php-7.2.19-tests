--TEST--
$this re-assign in extract()
--FILE--
<?php
class C
{
    function foo() {
        extract(["this"=>42]);
        var_dump($this);
    }
}
$o = new C;
$o->foo();
?>
--EXPECTF--
Fatal error: Uncaught Error: Cannot re-assign $this in %sthis_in_extract.php:5
Stack trace:
#0 %sthis_in_extract.php(5): extract(Array, 0, unpassed)
#1 %sthis_in_extract.php(10): C->foo()
#2 {main}
  thrown in %sthis_in_extract.php on line 10
