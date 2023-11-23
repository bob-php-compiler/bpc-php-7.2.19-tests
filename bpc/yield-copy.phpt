--TEST--
yield copy php-hash
--FILE--
<?php

$ret = array('e' => 'E');

function gen(&$ret)
{
    $k = array('a');
    $v = array('A');
    yield $k => $v;
    var_dump($k, $v); // k v changed outside, inner should not change

    $x = yield; // outside send a value, changed inner, outside should not change
    $x['d'] = 'D';
    yield;

    return $ret; // return value always copied
}

$g = gen($ret);
$g->rewind();
$k = $g->key();
$v = $g->current();
$k[] = 'b';
$v[] = 'B';
$g->next();

$x = array('c' => 'C');
$g->send($x);
var_dump($x);

$g->next();

$return = $g->getReturn();
$return['f'] = 'F';
var_dump($ret, $return);

?>
--EXPECT--
array(1) {
  [0]=>
  string(1) "a"
}
array(1) {
  [0]=>
  string(1) "A"
}
array(1) {
  ["c"]=>
  string(1) "C"
}
array(1) {
  ["e"]=>
  string(1) "E"
}
array(2) {
  ["e"]=>
  string(1) "E"
  ["f"]=>
  string(1) "F"
}
