--TEST--
object unset extended property
--FILE--
<?php

class Test
{
    protected $a = 'A';
    public static $c = 'staticC';

    public function __unset($name)
    {
        echo __METHOD__, "($name)\n";
        unset($this->$name);
    }
}

$o = new Test;
$o->b = 'B';
var_dump($o);
echo "unset a\n";
unset($o->a);
echo "unset b\n";
unset($o->b);
echo "unset b again\n";
unset($o->b);
var_dump($o);
echo "unset static c\n";
unset($o->c);


?>
--EXPECTF--
object(Test)#%d (2) {
  ["a":protected]=>
  string(1) "A"
  ["b"]=>
  string(1) "B"
}
unset a
Test::__unset(a)
unset b
unset b again
Test::__unset(b)
object(Test)#%d (0) {
}
unset static c
Test::__unset(c)
