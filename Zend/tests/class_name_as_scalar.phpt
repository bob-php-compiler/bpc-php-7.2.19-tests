--TEST--
class name as scalar from ::class keyword
--FILE--
<?php

class Foo\Bar\One
{
    // compile time constants
    const A = self::class;
    const B = Foo\Bar\Two::class;
}
class Foo\Bar\Two extends Foo\Bar\One
{
    public static function run()
    {
        var_dump(self::class);
        // self compile time lookup
        var_dump(static::class);
        // runtime lookup
        var_dump(parent::class);
        // runtime lookup
        var_dump(Foo\Bar\Baz::class);
        // default compile time lookup
    }
}
class Foo\Bar\Three extends Foo\Bar\Two
{
    // compile time static lookups
    public static function checkCompileTime($one = self::class, $two = Foo\Bar\Baz::class, $three = Foo\Bar\One::A, $four = self::B)
    {
        var_dump($one, $two, $three, $four);
    }
}
echo "In NS\n";
var_dump(Foo\Bar\Moo::CLASS);
// resolve in namespace
echo "Top\n";
var_dump(Foo\Bar\One::class);
// resolve from use
var_dump(Boo::class);
// resolve in global namespace
var_dump(Bee\Bop::CLASS);
// resolve from use as
var_dump(Moo::Class);
// resolve fully qualified
$class = Foo\Bar\One::class;
// assign class as scalar to var
$x = new $class();
// create new class from original scalar assignment
var_dump($x);
Foo\Bar\Two::run();
// resolve runtime lookups
echo "Parent\n";
Foo\Bar\Three::run();
// resolve runtime lookups with inheritance
echo "Compile Check\n";
Foo\Bar\Three::checkCompileTime();

?>
--EXPECTF--
In NS
string(11) "Foo\Bar\Moo"
Top
string(11) "Foo\Bar\One"
string(3) "Boo"
string(7) "Bee\Bop"
string(3) "Moo"
object(Foo\Bar\One)#1 (0) {
}
string(11) "Foo\Bar\Two"
string(11) "Foo\Bar\Two"
string(11) "Foo\Bar\One"
string(11) "Foo\Bar\Baz"
Parent
string(11) "Foo\Bar\Two"
string(13) "Foo\Bar\Three"
string(11) "Foo\Bar\One"
string(11) "Foo\Bar\Baz"
Compile Check
string(13) "Foo\Bar\Three"
string(11) "Foo\Bar\Baz"
string(11) "Foo\Bar\One"
string(11) "Foo\Bar\Two"
