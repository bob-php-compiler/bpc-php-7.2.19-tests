--TEST--
mb_encoding_aliases()
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--FILE--
<?php
mb_encoding_aliases();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mb_encoding_aliases(): 1 required, 0 provided in %s on line 2
 -- compile-error
