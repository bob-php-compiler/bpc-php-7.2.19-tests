--TEST--
Bug #66964 (mb_convert_variables() cannot detect recursion)
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--FILE--
<?php
$a[] = &$a;
var_dump(mb_convert_variables('utf-8', 'auto', $a));
var_dump(mb_convert_variables('utf-8', 'utf-8', $a));

unset($a);
$a[] = '日本語テキスト';
$a[] = '日本語テキスト';
$a[] = '日本語テキスト';
$a[] = '日本語テキスト';
var_dump(mb_convert_variables('utf-8', 'utf-8', $a), $a);

$a[] = &$a;
var_dump(mb_convert_variables('utf-8', 'utf-8', $a), $a);

?>
--EXPECTF--
string(5) "ASCII"
string(5) "UTF-8"
string(5) "UTF-8"
array(4) {
  [0]=>
  string(21) "日本語テキスト"
  [1]=>
  string(21) "日本語テキスト"
  [2]=>
  string(21) "日本語テキスト"
  [3]=>
  string(21) "日本語テキスト"
}
string(5) "UTF-8"
array(5) {
  [0]=>
  string(21) "日本語テキスト"
  [1]=>
  string(21) "日本語テキスト"
  [2]=>
  string(21) "日本語テキスト"
  [3]=>
  string(21) "日本語テキスト"
  [4]=>
  &array(5) {
    [0]=>
    string(21) "日本語テキスト"
    [1]=>
    string(21) "日本語テキスト"
    [2]=>
    string(21) "日本語テキスト"
    [3]=>
    string(21) "日本語テキスト"
    [4]=>
    *RECURSION*
  }
}
