--TEST--
parse_ini_file() boolean operators
--FILE--
<?php

$ini_file = "parse_ini_booleans.data";

var_dump(parse_ini_file($ini_file, 1));

echo "Done.\n";

?>
--EXPECTF--
array(3) {
  ["error_reporting values"]=>
  array(6) {
    ["foo"]=>
    string(14) "E_ALL E_NOTICE"
    ["error_reporting"]=>
    string(5) "32767"
    ["error_reporting1"]=>
    string(57) "E_COMPILE_ERROR|E_RECOVERABLE_ERROR	|E_ERROR|E_CORE_ERROR"
    ["error_reporting2"]=>
    string(15) "E_ALL&~E_NOTICE"
    ["error_reporting3"]=>
    string(17) "E_ALL & ~E_NOTICE"
    ["error_reporting4"]=>
    string(28) "E_ALL & ~E_NOTICE | E_STRICT"
  }
  ["true or false"]=>
  array(8) {
    ["bool_true"]=>
    string(1) "1"
    ["bool_yes"]=>
    string(1) "1"
    ["bool_on"]=>
    string(1) "1"
    ["bool_false"]=>
    string(0) ""
    ["bool_off"]=>
    string(0) ""
    ["bool_no"]=>
    string(0) ""
    ["bool_none"]=>
    string(0) ""
    ["bool_null"]=>
    string(0) ""
  }
  ["strings"]=>
  array(8) {
    ["string_true"]=>
    string(4) "true"
    ["string_yes"]=>
    string(4) " yes"
    ["string_on"]=>
    string(5) "  on "
    ["string_false"]=>
    string(5) "false"
    ["string_off"]=>
    string(4) "Off "
    ["string_no"]=>
    string(4) "No	 "
    ["string_none"]=>
    string(5) " NoNe"
    ["string_null"]=>
    string(4) "NULl"
  }
}
Done.
