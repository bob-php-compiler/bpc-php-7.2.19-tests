--TEST--
file() with a range of integer flag values
--FILE--
<?php

$filepath = "file_variation6.tmp";
$fd = fopen($filepath, "w+");
fwrite($fd, "Line 1\nLine 2\nLine 3");
fclose($fd);

for ($flags = 0; $flags <= 32; $flags++) {
	var_dump(file($filepath, $flags & ~FILE_USE_INCLUDE_PATH));
}

unlink($filepath);

?>
--EXPECTF--
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(7) "Line 1
"
  [1]=>
  string(7) "Line 2
"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}
array(3) {
  [0]=>
  string(6) "Line 1"
  [1]=>
  string(6) "Line 2"
  [2]=>
  string(6) "Line 3"
}

Warning: file(): '24' flag is not supported in %s on line %d
bool(false)

Warning: file(): '24' flag is not supported in %s on line %d
bool(false)

Warning: file(): '26' flag is not supported in %s on line %d
bool(false)

Warning: file(): '26' flag is not supported in %s on line %d
bool(false)

Warning: file(): '28' flag is not supported in %s on line %d
bool(false)

Warning: file(): '28' flag is not supported in %s on line %d
bool(false)

Warning: file(): '30' flag is not supported in %s on line %d
bool(false)

Warning: file(): '30' flag is not supported in %s on line %d
bool(false)

Warning: file(): '32' flag is not supported in %s on line %d
bool(false)
