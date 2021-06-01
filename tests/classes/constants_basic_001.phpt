--TEST--
Class constant declarations
--ARGS--
--bpc-include-file tests/classes/constants_basic_001.inc
--FILE--
<?php
  define('DEFINED', 1234);
  $def = 456;
  define('DEFINED_TO_VAR', $def);
  define('DEFINED_TO_UNDEF_VAR', $undef);

  include 'constants_basic_001.inc';

  echo "\nAttempt to access various kinds of class constants:\n";
  var_dump(C::c0);
  var_dump(C::c1);
  var_dump(C::c2);
  var_dump(C::c3);
  var_dump(C::c4);
  var_dump(C::c5);
  var_dump(C::c6);
  var_dump(C::c7);
  var_dump(C::c8);
  var_dump(C::c9);
  var_dump(C::c10);
  var_dump(C::c11);
  var_dump(C::c12);
  var_dump(C::c13);
  var_dump(C::c14);
  var_dump(C::c15);
  var_dump(C::c16);
  var_dump(C::c17);
  var_dump(C::c18);

  echo "\nExpecting fatal error:\n";
  var_dump(C::c19);

  echo "\nYou should not see this.";
?>
--EXPECTF--

Warning: Use of undefined constant UNDEFINED - assumed 'UNDEFINED' (this will throw an Error in a future version of PHP) in %s on line %d

Attempt to access various kinds of class constants:
string(9) "UNDEFINED"
int(1)
float(1.5)
int(1)
float(1.5)
int(-1)
float(-1.5)
int(15)
string(%d) "%s"
string(1) "C"
string(1) "C"
string(0) ""
int(1234)
int(456)
NULL
string(6) "hello1"
string(6) "hello2"
string(6) "hello2"
string(6) "hello2"

Expecting fatal error:

Fatal error: Uncaught Error: Undefined class constant 'c19' in %s:31
Stack trace:
#0 {main}
  thrown in %s on line 31
