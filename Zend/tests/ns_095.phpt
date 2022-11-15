--TEST--
Absolute namespaces should be allowed
--FILE--
<?php

class Foo\Bar\ClassA
{
}
class Foo\Bar\ClassB
{
}
class Foo\Bar\ClassC
{
}
function Foo\Bar\fn_a()
{
    return __FUNCTION__;
}
function Foo\Bar\fn_b()
{
    return __FUNCTION__;
}
function Foo\Bar\fn_c()
{
    return __FUNCTION__;
}
define('Foo_Bar_CONST_A', 1);
define('Foo_Bar_CONST_B', 2);
define('Foo_Bar_CONST_C', 3);
var_dump(Foo\Bar\ClassA::class);
var_dump(Foo\Bar\ClassB::class);
var_dump(Foo\Bar\ClassC::class);
var_dump(Foo\Bar\fn_a());
var_dump(Foo\Bar\fn_b());
var_dump(Foo\Bar\fn_c());
var_dump(Foo_Bar_CONST_A);
var_dump(Foo_Bar_CONST_B);
var_dump(Foo_Bar_CONST_C);
echo "\nDone\n";
?>
--EXPECTF--
string(14) "Foo\Bar\ClassA"
string(14) "Foo\Bar\ClassB"
string(14) "Foo\Bar\ClassC"
string(%d) "foo\bar\fn_a"
string(%d) "foo\bar\fn_b"
string(%d) "foo\bar\fn_c"
int(1)
int(2)
int(3)

Done
