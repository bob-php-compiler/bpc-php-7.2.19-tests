--TEST--
Test file-get_contents() and file_put_contents() functions : error conditions
--FILE--
<?php
/* Prototype: string file_get_contents( string $filename{, bool $use_include_path[,
 *                                      resource $context[, int $offset[, int $maxlen]]]] )
 * Description: Reads entire file into a string
 */

/* Prototype: int file_put_contents( string $filename, mixed $data[, int $flags[, resource $context]] )
 * Description: Write a string to a file
 */

echo "*** Testing error conditions ***\n";

echo "\n-- Testing No.of arguments less than expected --\n";
print( file_get_contents() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function file_get_contents(): 1 required, 0 provided in %s on line %d
 -- compile-error
