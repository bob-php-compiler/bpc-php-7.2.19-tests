--TEST--
Bug #46347 (parse_ini_file() doesn't support * in keys)
--FILE--
<?php

$str = <<< EOF
[section]
part1.*.part2 = 1
EOF;

$file = 'parse.ini';
file_put_contents($file, $str);

var_dump(parse_ini_file($file));
?>
--CLEAN--
<?php
unlink('parse.ini');
?>
--EXPECTF--
array(1) {
  ["part1.*.part2"]=>
  string(1) "1"
}
