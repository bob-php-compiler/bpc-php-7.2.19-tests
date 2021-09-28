--TEST--
assigning tests
--FILE--
<?php

class A implements ArrayAccess
{
    public function offsetExists($offset) {}
    public function offsetGet($offset)
    {
        echo "offsetGet $offset\n";
        return $offset;
    }
    public function offsetSet($offset, $value) {}
    public function offsetUnset($offset) {}
}

function g()
{
    echo "g\n";
    return 'g';
}

$a = new A;

// eval order: $a['n'] first, then $$name
$name = 'n';
$$name = $a['n'];
var_dump($n);

// eval order: g() first, then $a['g']
${g()} = $a['g'];
var_dump($g);

$$name = &$a['n'];
var_dump($$name);

${g()} = &$a['g'];
var_dump(${g()});

?>
--EXPECTF--
offsetGet n
string(1) "n"
g
offsetGet g
string(1) "g"
offsetGet n

Notice: Indirect modification of overloaded element of A has no effect in %s on line 32
string(1) "n"
g
offsetGet g

Notice: Indirect modification of overloaded element of A has no effect in %s on line 35
g
string(1) "g"
