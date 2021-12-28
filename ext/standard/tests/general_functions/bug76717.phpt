--TEST--
Bug #76717: var_export() does not create a parsable value for PHP_INT_MIN
--ARGS--
--bpc-lib-path /tmp/bug76717 \
--FILE--
<?php

$min = bpc_eval('/tmp/bug76717', 'php-min', 'return '.var_export(PHP_INT_MIN, true).';');
$max = bpc_eval('/tmp/bug76717', 'php-max', 'return '.var_export(PHP_INT_MAX, true).';');
var_dump($min === PHP_INT_MIN);
var_dump($max === PHP_INT_MAX);

?>
--EXPECT--
bool(true)
bool(true)
