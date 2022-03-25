--TEST--
Bug #53141 (autoload misbehaves if called from closing session)
--ARGS--
--bpc-include-file ext/session/tests/Bar.inc \
--FILE--
<?php
spl_autoload_register(function ($class) {
    fwrite(STDOUT, "Loading $class");
    include "$class.inc";
});

class Foo
{
    function __sleep()
    {
        new Bar;
        return array();
    }
}

session_start();
$_SESSION['foo'] = new Foo;

?>
--EXPECT--
Loading Bar
