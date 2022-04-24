--TEST--
Bug #70868, with PCRE JIT
--INI--
pcre.jit=1
--FILE--
<?php

$iterator =
    new RegexIterator(
        new ArrayIterator(array('A.phpt', 'B.phpt', 'C.phpt')),
        '/\.phpt$/'
    )
;

foreach ($iterator as $foo) {
    var_dump($foo);
    preg_replace('/\.phpt$/', '', '');
}

echo "Done", PHP_EOL;

?>
--EXPECTF--
string(6) "A.phpt"
string(6) "B.phpt"
string(6) "C.phpt"
Done
