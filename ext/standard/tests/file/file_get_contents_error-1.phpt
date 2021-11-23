--TEST--
Test file_get_contents() function : error conditions
--ARGS--
--bpc-include-file ext/standard/tests/file/file.inc \
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php
/* Prototype: string file_get_contents( string $filename{, bool $use_include_path[,
 *                                      resource $context[, int $offset[, int $maxlen]]]] )
 * Description: Reads entire file into a string
 */

echo "*** Testing error conditions ***\n";

echo "\n-- Testing No.of arguments less than expected --\n";
print( file_get_contents() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function file_get_contents(): 1 required, 0 provided in %s on line %d
 -- compile-error
