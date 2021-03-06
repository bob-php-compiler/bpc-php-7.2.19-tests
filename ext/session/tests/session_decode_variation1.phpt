--TEST--
Test session_decode() function : variation
--FILE--
<?php

ob_start();

/*
 * Prototype : string session_decode(void)
 * Description : Decodes session data from a string
 * Source code : ext/session/session.c
 */

echo "*** Testing session_decode() : variation ***\n";

var_dump(session_start());
var_dump(session_decode("foo|a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}"));
var_dump($_SESSION);
var_dump(session_decode("foo|a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}"));
var_dump($_SESSION);
var_dump(session_decode("foo|a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}"));
var_dump($_SESSION);
var_dump(session_decode("foo|a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}"));
var_dump($_SESSION);
var_dump(session_decode("foo|a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}"));
var_dump($_SESSION);
var_dump(session_destroy());

echo "Done";
ob_end_flush();
?>
--EXPECTF--
*** Testing session_decode() : variation ***
bool(true)
bool(true)
array(1) {
  ["foo"]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}
bool(true)
array(1) {
  ["foo"]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}
bool(true)
array(1) {
  ["foo"]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}
bool(true)
array(1) {
  ["foo"]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}
bool(true)
array(1) {
  ["foo"]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}
bool(true)
Done
