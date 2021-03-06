--TEST--
Handling of max_input_nesting_level being reached
--INI--
always_populate_raw_post_data=0
display_errors=0
max_input_nesting_level=10
max_input_vars=1000
log_errors=0
--POST--
a=1&b=ZYX&c[][][][][][][][][][][][][][][][][][][][][][]=123&d=123&e[][]][]=3
--FILE--
<?php
var_dump($_POST);
var_dump(error_get_last());
?>
--EXPECTF--
array(4) {
  ["a"]=>
  string(1) "1"
  ["b"]=>
  string(3) "ZYX"
  ["d"]=>
  string(3) "123"
  ["e"]=>
  array(1) {
    [0]=>
    array(1) {
      [0]=>
      string(1) "3"
    }
  }
}
array(4) {
  ["type"]=>
  int(2)
  ["message"]=>
  string(%d) "Input variable nesting level exceeded 10. To increase the limit change max_input_nesting_level in %s."
  ["file"]=>
  string(7) "Unknown"
  ["line"]=>
  int(0)
}
