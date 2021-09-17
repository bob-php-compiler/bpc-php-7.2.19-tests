--TEST--
list() with undefined keys
--SKIPIF--
skip not support nested list and `[]` list and keyed list
--FILE--
<?php

$contrivedMixedKeyTypesExample = [
    7 => "the best PHP version",
    "elePHPant" => "the cutest mascot"
];

list(5 => $five, "duke" => $duke) = $contrivedMixedKeyTypesExample;

var_dump($five, $duke);

?>
--EXPECTF--
Notice: Undefined offset: 5 in %s on line %d

Notice: Undefined index: duke in %s on line %d
NULL
NULL
