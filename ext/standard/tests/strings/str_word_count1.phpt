--TEST--
str_word_count() and invalid arguments
--FILE--
<?php

var_dump(str_word_count(""));
var_dump(str_word_count("", -1));
var_dump(str_word_count("", -1, $a));
var_dump($a);

echo "Done\n";
?>
--EXPECTF--
int(0)

Warning: str_word_count(): Invalid format value -1 in %s on line %d
bool(false)

Warning: str_word_count(): Invalid format value -1 in %s on line %d
bool(false)
NULL
Done
