--TEST--
int connection_status ( void );
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br> - #phparty7 - @phpsp - novatec/2015 - sao paulo - br
--SKIPIF--
skip functions not implemented
--FILE--
<?php
var_dump(connection_status() == CONNECTION_NORMAL);
?>
--EXPECTF--
bool(true)
