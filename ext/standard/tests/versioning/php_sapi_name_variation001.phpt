--TEST--
php_sapi_name() function when switching to webserver by using post
--SKIPIF--
skip invalid test
--POST--
foo=BAR
--CREDITS--
Sebastian Schürmann
sebs@php.net
Testfest 2009 Munich
--FILE--
<?php
echo php_sapi_name();
?>
--EXPECT--
cgi-fcgi
