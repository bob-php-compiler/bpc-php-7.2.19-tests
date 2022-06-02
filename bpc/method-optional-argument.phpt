--TEST--
method optional argument test
--FILE--
<?php

class C
{
    static function say(array $words = array())
    {
        $words[] = 'hello';
        $words[] = 'world';
        var_dump($words);
    }

    static function say_ref(array &$words = array())
    {
        $words[] = 'hello';
        $words[] = 'world';
        var_dump($words);
    }
}

C::say();

$f = array('C', 'say');
$f();
$f();

C::say_ref();

$f = array('C', 'say_ref');
$f();
$f();

?>
--EXPECT--
array(2) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
}
array(2) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
}
array(2) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
}
array(2) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
}
array(2) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
}
array(2) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
}
