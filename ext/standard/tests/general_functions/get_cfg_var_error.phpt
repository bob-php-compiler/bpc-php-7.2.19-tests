--TEST--
Test function get_cfg_var() by calling it more than or less than its expected arguments
--CREDITS--
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--INI--
session.use_cookies=0
session.serialize_handler=php
session.save_handler=files
--FILE--
<?php

echo "*** Test by calling method or function with incorrect numbers of arguments ***\n";

var_dump(get_cfg_var( 'session.use_cookies', 'session.serialize_handler' ) );


?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_cfg_var(): 1 at most, 2 provided in %s on line %d
 -- compile-error
