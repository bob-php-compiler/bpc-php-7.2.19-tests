--TEST--
Test glob() function: error conditions
--FILE--
<?php
/* Prototype: array glob ( string $pattern [, int $flags] );
   Description: Find pathnames matching a pattern
*/

$file_path = '.';

// temp dir created
mkdir("$file_path/glob-error");
// temp file created
$fp = fopen("$file_path/glob-error/wonder12345", "w");
fclose($fp);

echo "*** Testing glob() : error conditions ***\n";

echo "\n-- Testing glob() with invalid arguments --\n";
var_dump( glob("./glob-error/wonder12345", '') );
var_dump( glob("./glob-error/wonder12345", "string") );

echo "Done\n";
?>
--CLEAN--
<?php
// temp file deleted
unlink("./glob-error/wonder12345");
// temp dir deleted
rmdir("./glob-error");
?>
--EXPECTF--
*** Testing glob() : error conditions ***

-- Testing glob() with invalid arguments --

Warning: glob() expects parameter 2 to be integer, string given in %s on line %d
NULL

Warning: glob() expects parameter 2 to be integer, string given in %s on line %d
NULL
Done
