--TEST--
Test session_regenerate_id() function : basic functionality
--GET--
a=b
--FILE--
<?php

/*
 * Prototype : bool session_regenerate_id([bool $delete_old_session])
 * Description : Update the current session id with a newly generated one
 * Source code : ext/session/session.c
 */

ob_start();

echo "*** Testing session_regenerate_id() : basic functionality for cookie ***\n";

function find_cookie_header() {
	$headers = headers_list();
	$target  = "Set-Cookie: PHPSESSID=";
	foreach ($headers as $h) {
		if (strstr($h, $target) !== FALSE) {
			echo $h."\n";
			return TRUE;
		}
	}
	var_dump($headers);
	return FALSE;
}

var_dump(session_start());
var_dump(find_cookie_header());
$id = session_id();
var_dump(session_regenerate_id());
var_dump(find_cookie_header());
var_dump($id !== session_id());
var_dump(session_id());
var_dump(session_destroy());

ob_end_flush();

echo "Done";
?>
--EXPECTF--
*** Testing session_regenerate_id() : basic functionality for cookie ***
bool(true)
Set-Cookie: PHPSESSID=%s; path=/
bool(true)
bool(true)
Set-Cookie: PHPSESSID=%s; path=/
bool(true)
bool(true)
string(32) "%s"
bool(true)
Done
