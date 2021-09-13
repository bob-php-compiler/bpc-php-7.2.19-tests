--TEST--
__DIR__ constant test with nested includes
--ARGS--
--bpc-include-file Zend/tests/constants/fixtures/folder1/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder1/subfolder1/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder1/subfolder2/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder1/subfolder3/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder1/subfolder4/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder2/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder2/subfolder1/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder2/subfolder2/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder2/subfolder3/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder2/subfolder4/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder3/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder3/subfolder1/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder3/subfolder2/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder3/subfolder3/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder3/subfolder4/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder4/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder4/subfolder1/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder4/subfolder2/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder4/subfolder3/fixture.inc \
--bpc-include-file Zend/tests/constants/fixtures/folder4/subfolder4/fixture.inc
--FILE--
<?php
echo __DIR__ . "\n";
echo dirname(__FILE__) . "\n";
include 'fixtures/folder1/fixture.inc';
include 'fixtures/folder1/subfolder1/fixture.inc';
include 'fixtures/folder1/subfolder2/fixture.inc';
include 'fixtures/folder1/subfolder3/fixture.inc';
include 'fixtures/folder1/subfolder4/fixture.inc';
include 'fixtures/folder2/fixture.inc';
include 'fixtures/folder2/subfolder1/fixture.inc';
include 'fixtures/folder2/subfolder2/fixture.inc';
include 'fixtures/folder2/subfolder3/fixture.inc';
include 'fixtures/folder2/subfolder4/fixture.inc';
include 'fixtures/folder3/fixture.inc';
include 'fixtures/folder3/subfolder1/fixture.inc';
include 'fixtures/folder3/subfolder2/fixture.inc';
include 'fixtures/folder3/subfolder3/fixture.inc';
include 'fixtures/folder3/subfolder4/fixture.inc';
include 'fixtures/folder4/fixture.inc';
include 'fixtures/folder4/subfolder1/fixture.inc';
include 'fixtures/folder4/subfolder2/fixture.inc';
include 'fixtures/folder4/subfolder3/fixture.inc';
include 'fixtures/folder4/subfolder4/fixture.inc';
?>
--EXPECTF--
constants
constants
constants%sfixtures%sfolder1
constants%sfixtures%sfolder1
constants%sfixtures%sfolder1%ssubfolder1
constants%sfixtures%sfolder1%ssubfolder1
constants%sfixtures%sfolder1%ssubfolder2
constants%sfixtures%sfolder1%ssubfolder2
constants%sfixtures%sfolder1%ssubfolder3
constants%sfixtures%sfolder1%ssubfolder3
constants%sfixtures%sfolder1%ssubfolder4
constants%sfixtures%sfolder1%ssubfolder4
constants%sfixtures%sfolder2
constants%sfixtures%sfolder2
constants%sfixtures%sfolder2%ssubfolder1
constants%sfixtures%sfolder2%ssubfolder1
constants%sfixtures%sfolder2%ssubfolder2
constants%sfixtures%sfolder2%ssubfolder2
constants%sfixtures%sfolder2%ssubfolder3
constants%sfixtures%sfolder2%ssubfolder3
constants%sfixtures%sfolder2%ssubfolder4
constants%sfixtures%sfolder2%ssubfolder4
constants%sfixtures%sfolder3
constants%sfixtures%sfolder3
constants%sfixtures%sfolder3%ssubfolder1
constants%sfixtures%sfolder3%ssubfolder1
constants%sfixtures%sfolder3%ssubfolder2
constants%sfixtures%sfolder3%ssubfolder2
constants%sfixtures%sfolder3%ssubfolder3
constants%sfixtures%sfolder3%ssubfolder3
constants%sfixtures%sfolder3%ssubfolder4
constants%sfixtures%sfolder3%ssubfolder4
constants%sfixtures%sfolder4
constants%sfixtures%sfolder4
constants%sfixtures%sfolder4%ssubfolder1
constants%sfixtures%sfolder4%ssubfolder1
constants%sfixtures%sfolder4%ssubfolder2
constants%sfixtures%sfolder4%ssubfolder2
constants%sfixtures%sfolder4%ssubfolder3
constants%sfixtures%sfolder4%ssubfolder3
constants%sfixtures%sfolder4%ssubfolder4
constants%sfixtures%sfolder4%ssubfolder4
