--TEST--
bgl_vector_* tests
--FILE--
<?php

// init
$v = bgl_vector_init(5, NULL);
for ($i = 0; $i < 5; $i++) {
    echo $i, ':';
    var_dump(bgl_vector_get($v, $i));
}
var_dump(bgl_vector_to_array($v));

// set
for ($i = 0; $i < 5; $i++) {
    bgl_vector_set($v, $i, $i);
}
for ($i = 0; $i < 5; $i++) {
    echo $i, ':';
    var_dump(bgl_vector_get($v, $i));
}
var_dump(bgl_vector_to_array($v));

// copy
$v2 = bgl_vector_copy($v, 2, NULL);
var_dump(bgl_vector_get($v2, 0));
var_dump(bgl_vector_get($v2, 1));
var_dump(bgl_vector_to_array($v2));

$v7 = bgl_vector_copy($v, 7, NULL);
for ($i = 0; $i < 7; $i++) {
    echo $i, ':';
    var_dump(bgl_vector_get($v7, $i));
}
var_dump(bgl_vector_to_array($v7));

?>
--EXPECT--
0:NULL
1:NULL
2:NULL
3:NULL
4:NULL
array(5) {
  [0]=>
  NULL
  [1]=>
  NULL
  [2]=>
  NULL
  [3]=>
  NULL
  [4]=>
  NULL
}
0:int(0)
1:int(1)
2:int(2)
3:int(3)
4:int(4)
array(5) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(3)
  [4]=>
  int(4)
}
int(0)
int(1)
array(2) {
  [0]=>
  int(0)
  [1]=>
  int(1)
}
0:int(0)
1:int(1)
2:int(2)
3:int(3)
4:int(4)
5:NULL
6:NULL
array(7) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(3)
  [4]=>
  int(4)
  [5]=>
  NULL
  [6]=>
  NULL
}
