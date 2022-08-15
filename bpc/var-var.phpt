--TEST--
var-var test
--FILE--
<?php

function test($word = null)
{
    static $counter = 0;
    $counter++;

    $varname = 'word';
    var_dump($$varname);
    $varname = 'counter';
    var_dump($$varname);
}

test('Hello1');
test('Hello2');

class C
{
    function __construct($word = null)
    {
        static $counter = 0;
        $counter++;

        $varname = 'word';
        var_dump($$varname);
        $varname = 'counter';
        var_dump($$varname);
    }
}

new C("Hello1");
new C("Hello2");

?>
--EXPECTF--
string(6) "Hello1"
int(1)
string(6) "Hello2"
int(2)
string(6) "Hello1"
int(1)
string(6) "Hello2"
int(2)
