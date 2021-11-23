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

$file_handle = fopen($file_path."/file_put_contents.tmp", "w");
echo "\n-- Testing No.of arguments greater than expected --\n";
print( file_get_contents("abc.tmp", false, $file_handle, 1, 2, "extra_argument") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function file_get_contents(): 5 at most, 6 provided in %s on line %d
 -- compile-error
