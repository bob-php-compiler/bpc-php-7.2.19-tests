--TEST--
Bug #66481: Calls to session_name() segfault when session.name is null.
--INI--
session.name=
--FILE--
<?php
ob_start();

var_dump(session_name("foo"));
var_dump(session_name("bar"));
--EXPECTF--
session.name cannot be a numeric or empty ''
invalid config value  for ini entry session.name
string(9) "PHPSESSID"
string(3) "foo"
