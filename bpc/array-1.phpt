--TEST--
array tests
--FILE--
<?php

$a = array();
$a[] = &$a;
$b = array($a);
var_dump($a, $b);
print_r($a);
print_r($b);
var_export($a);
echo "\n";
var_export($b);
echo "\n";
$b[0][] = 'xx';
var_dump($a, $b);
print_r($a);
print_r($b);
var_export($a);
echo "\n";
var_export($b);
echo "\n";

?>
--EXPECTF--
array(1) {
  [0]=>
  &array(1) {
    [0]=>
    *RECURSION*
  }
}
array(1) {
  [0]=>
  array(1) {
    [0]=>
    &array(1) {
      [0]=>
      *RECURSION*
    }
  }
}
Array
(
    [0] => Array
 *RECURSION*
)
Array
(
    [0] => Array
        (
            [0] => Array
                (
                    [0] => Array
 *RECURSION*
                )

        )

)

Warning: var_export does not handle circular references in %s on line 9
array (
  0 => NULL,
)

Warning: var_export does not handle circular references in %s on line 11
array (
  0 => 
  array (
    0 => 
    array (
      0 => NULL,
    ),
  ),
)
array(1) {
  [0]=>
  &array(1) {
    [0]=>
    *RECURSION*
  }
}
array(1) {
  [0]=>
  array(2) {
    [0]=>
    &array(1) {
      [0]=>
      *RECURSION*
    }
    [1]=>
    string(2) "xx"
  }
}
Array
(
    [0] => Array
 *RECURSION*
)
Array
(
    [0] => Array
        (
            [0] => Array
                (
                    [0] => Array
 *RECURSION*
                )

            [1] => xx
        )

)

Warning: var_export does not handle circular references in %s on line 17
array (
  0 => NULL,
)

Warning: var_export does not handle circular references in %s on line 19
array (
  0 => 
  array (
    0 => 
    array (
      0 => NULL,
    ),
    1 => 'xx',
  ),
)
