--TEST--
Test session_set_cookie_params() function : variation
--INI--
session.cookie_httponly=1
--FILE--
<?php



/*
 * Prototype : void session_set_cookie_params(int $lifetime [, string $path [, string $domain [, bool $secure [, bool $httponly]]]])
 * Description : Set the session cookie parameters
 * Source code : ext/session/session.c
 */

echo "*** Testing session_set_cookie_params() : variation ***\n";

var_dump(ini_get("session.cookie_httponly"));
var_dump(session_set_cookie_params(3600, "/path", "blah", FALSE, FALSE));
var_dump(ini_get("session.cookie_httponly"));
var_dump(session_start());
var_dump(ini_get("session.cookie_httponly"));
var_dump(session_set_cookie_params(3600, "/path", "blah", FALSE, TRUE));
var_dump(ini_get("session.cookie_httponly"));
var_dump(session_destroy());
var_dump(ini_get("session.cookie_httponly"));
var_dump(session_set_cookie_params(3600, "/path", "blah", FALSE, FALSE));
var_dump(ini_get("session.cookie_httponly"));

echo "Done";
?>
--EXPECTF--
*** Testing session_set_cookie_params() : variation ***
string(1) "1"
bool(true)
string(1) "0"
bool(true)
string(1) "0"

Warning: session_set_cookie_params(): Cannot change session cookie parameters when session is active in %s on line 18
bool(false)
string(1) "0"
bool(true)
string(1) "0"
bool(true)
string(1) "0"
Done
