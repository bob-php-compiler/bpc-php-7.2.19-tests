--TEST--
Bug #42798 (_autoload() not triggered for classes used in method signature)
--SKIPIF--
skip function signatures before global code
--FILE--
<?php
spl_autoload_register(function ($className) {
    print "$className\n";
    exit();
});

function foo($c = ok::constant) {
}

foo();
--EXPECT--
ok
