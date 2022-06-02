--TEST--
function optional argument test
--FILE--
<?php

function say(array $words = array())
{
    $words[] = 'hello';
    $words[] = 'world';
    var_dump($words);
}

say();

$f = 'say';
$f();
$f();

function say_ref(array &$words = array())
{
    $words[] = 'hello';
    $words[] = 'world';
    var_dump($words);
}

say_ref();

$f = 'say_ref';
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
