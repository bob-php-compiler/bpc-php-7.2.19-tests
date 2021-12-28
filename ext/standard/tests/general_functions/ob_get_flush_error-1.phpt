--TEST--
Test ob_get_flush() function : error conditions
--INI--
output_buffering=0
--FILE--
<?php
/* Prototype  : bool ob_get_flush(void)
 * Description: Get current buffer contents, flush (send) the output buffer, and delete current output buffer
 * Source code: main/output.c
 * Alias to functions:
 */

echo "*** Testing ob_get_flush() : error conditions ***\n";

// One extra argument
$extra_arg = 10;
var_dump( ob_get_flush( $extra_arg ) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_get_flush(): 0 at most, 1 provided in %s on line %d
 -- compile-error
