--TEST--
Bug #66827: Session raises E_NOTICE when session name variable is array.
--INI--
--FILE--
<?php
$_COOKIE[session_name()] = array();
session_start();
echo 'OK';
--EXPECTF--
OK
