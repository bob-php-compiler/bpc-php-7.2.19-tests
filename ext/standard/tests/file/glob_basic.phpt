--TEST--
Test glob() function: basic functions
--FILE--
<?php
/* Prototype: array glob ( string $pattern [, int $flags] );
   Description: Find pathnames matching a pattern
*/

echo "*** Testing glob() : basic functions ***\n";

$file_path = '.';

// temp dirname used here
$dirname = "$file_path/glob-basic";

// temp dir created
mkdir($dirname);

// temp files created
$fp = fopen("$dirname/wonder12345", "w");
fclose($fp);
$fp = fopen("$dirname/wonder.txt", "w");
fclose($fp);
$fp = fopen("$dirname/file.text", "w");
fclose($fp);

// glob() with default arguments
sort_var_dump( glob($dirname."/*") );
sort_var_dump( glob($dirname."/*.txt") );
sort_var_dump( glob($dirname."/*.t?t") );
sort_var_dump( glob($dirname."/*.t*t") );
sort_var_dump( glob($dirname."/*.?") );
sort_var_dump( glob($dirname."/*.*") );

echo "Done\n";

function sort_var_dump($results) {
   sort($results);
   var_dump($results);
}
?>
--CLEAN--
<?php
$file_path = '.';
unlink("$file_path/glob-basic/wonder12345");
unlink("$file_path/glob-basic/wonder.txt");
unlink("$file_path/glob-basic/file.text");
rmdir("$file_path/glob-basic/");
?>
--EXPECTF--
*** Testing glob() : basic functions ***
array(3) {
  [0]=>
  string(%d) "%s/glob-basic/file.text"
  [1]=>
  string(%d) "%s/glob-basic/wonder.txt"
  [2]=>
  string(%d) "%s/glob-basic/wonder12345"
}
array(1) {
  [0]=>
  string(%d) "%s/glob-basic/wonder.txt"
}
array(1) {
  [0]=>
  string(%d) "%s/glob-basic/wonder.txt"
}
array(2) {
  [0]=>
  string(%d) "%s/glob-basic/file.text"
  [1]=>
  string(%d) "%s/glob-basic/wonder.txt"
}
array(0) {
}
array(2) {
  [0]=>
  string(%d) "%s/glob-basic/file.text"
  [1]=>
  string(%d) "%s/glob-basic/wonder.txt"
}
Done
