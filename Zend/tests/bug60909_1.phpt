--TEST--
Bug #60909 (custom error handler throwing Exception + fatal error = no shutdown function).
--FILE--
<?php
register_shutdown_function(function(){echo("\n\n!!!shutdown!!!\n\n");});
set_error_handler(function($errno, $errstr, $errfile, $errline){
 echo "error($errstr)";
 throw new Exception("Foo");
});

require 'notfound.php';
--EXPECTF--
Fatal error: require(): Failed find required 'notfound.php' (include_path='%s') in %sbug60909_1.php on line 8


!!!shutdown!!!
