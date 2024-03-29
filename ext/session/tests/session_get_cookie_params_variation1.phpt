--TEST--
Test session_get_cookie_params() function : variation
--INI--
session.cookie_lifetime=0
session.cookie_path=/
session.cookie_domain=
session.cookie_secure=0
session.cookie_httponly=0
--FILE--
<?php

ob_start();

/*
 * Prototype : array session_get_cookie_params(void)
 * Description : Get the session cookie parameters
 * Source code : ext/session/session.c
 */

echo "*** Testing session_get_cookie_params() : variation ***\n";

var_dump(session_get_cookie_params());
ini_set("session.cookie_lifetime", 3600);
var_dump(session_get_cookie_params());
ini_set("session.cookie_path", "/path");
var_dump(session_get_cookie_params());
ini_set("session.cookie_domain", "foo");
var_dump(session_get_cookie_params());
ini_set("session.cookie_secure", TRUE);
var_dump(session_get_cookie_params());
ini_set("session.cookie_httponly", TRUE);
var_dump(session_get_cookie_params());

echo "Done";
ob_end_flush();
?>
--EXPECTF--
*** Testing session_get_cookie_params() : variation ***
array(6) {
  ["lifetime"]=>
  int(0)
  ["path"]=>
  string(1) "/"
  ["domain"]=>
  string(0) ""
  ["secure"]=>
  bool(false)
  ["httponly"]=>
  bool(false)
  ["samesite"]=>
  string(0) ""
}
array(6) {
  ["lifetime"]=>
  int(3600)
  ["path"]=>
  string(1) "/"
  ["domain"]=>
  string(0) ""
  ["secure"]=>
  bool(false)
  ["httponly"]=>
  bool(false)
  ["samesite"]=>
  string(0) ""
}
array(6) {
  ["lifetime"]=>
  int(3600)
  ["path"]=>
  string(5) "/path"
  ["domain"]=>
  string(0) ""
  ["secure"]=>
  bool(false)
  ["httponly"]=>
  bool(false)
  ["samesite"]=>
  string(0) ""
}
array(6) {
  ["lifetime"]=>
  int(3600)
  ["path"]=>
  string(5) "/path"
  ["domain"]=>
  string(3) "foo"
  ["secure"]=>
  bool(false)
  ["httponly"]=>
  bool(false)
  ["samesite"]=>
  string(0) ""
}
array(6) {
  ["lifetime"]=>
  int(3600)
  ["path"]=>
  string(5) "/path"
  ["domain"]=>
  string(3) "foo"
  ["secure"]=>
  bool(true)
  ["httponly"]=>
  bool(false)
  ["samesite"]=>
  string(0) ""
}
array(6) {
  ["lifetime"]=>
  int(3600)
  ["path"]=>
  string(5) "/path"
  ["domain"]=>
  string(3) "foo"
  ["secure"]=>
  bool(true)
  ["httponly"]=>
  bool(true)
  ["samesite"]=>
  string(0) ""
}
Done
