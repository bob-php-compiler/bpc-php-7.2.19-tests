--TEST--
__DIR__ constant test with includes
--ARGS--
--bpc-include-file Zend/tests/constants/fixtures/folder1/fixture.inc --bpc-include-file Zend/tests/constants/fixtures/folder2/fixture.inc --bpc-include-file Zend/tests/constants/fixtures/folder3/fixture.inc --bpc-include-file Zend/tests/constants/fixtures/folder4/fixture.inc
--FILE--
<?php
echo __DIR__ . "\n";
echo dirname(__FILE__) . "\n";
include 'fixtures/folder1/fixture.inc';
include 'fixtures/folder2/fixture.inc';
include 'fixtures/folder3/fixture.inc';
include 'fixtures/folder4/fixture.inc';
?>
--EXPECTF--
constants
constants
constants%sfixtures%sfolder1
constants%sfixtures%sfolder1
constants%sfixtures%sfolder2
constants%sfixtures%sfolder2
constants%sfixtures%sfolder3
constants%sfixtures%sfolder3
constants%sfixtures%sfolder4
constants%sfixtures%sfolder4
