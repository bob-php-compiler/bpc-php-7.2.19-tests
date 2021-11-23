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

echo "\n-- Testing No.of arguments greater than expected --\n";

$file_handle = fopen("file_put_contents_error.tmp", "w");
print( file_get_contents($file_path."/file1.tmp", false, $file_handle, 1, 2, "extra_argument") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function file_get_contents(): 5 at most, 6 provided in %s on line %d
 -- compile-error
