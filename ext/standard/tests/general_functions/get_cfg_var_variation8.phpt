--TEST--
Test function get_cfg_var() by calling deprecated option
--CREDITS--
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--SKIPIF--
skip no ini magic_quotes_gpc
--INI--
magic_quotes_gpc=1
--FILE--
<?php
echo "*** Test by calling method or function with deprecated option ***\n";
var_dump(get_cfg_var( 'magic_quotes_gpc' ) );

?>
--EXPECTF--
*** Test by calling method or function with deprecated option ***
bool(false)
