--TEST--
Bug #75717: RecursiveArrayIterator does not traverse arrays by reference
--FILE--
<?php

function flatten(array $nestedArraysAndStrings){
    $flat=array();
    $iter = new RecursiveIteratorIterator(
        new RecursiveArrayIterator($nestedArraysAndStrings));
    foreach($iter as $leaf){ $flat[] = $leaf; }
    return join(NULL, $flat);
}

$noRefs = array(
    array(array(array('some'))),
    array(' nested '),
    "items"
);

$withRefs = array()+$noRefs;
$wat = $noRefs[0];
$withRefs[0] = &$wat;

echo flatten($noRefs), "\n";
echo flatten($withRefs), "\n";

?>
--EXPECT--
some nested items
some nested items
