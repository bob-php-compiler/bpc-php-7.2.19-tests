--TEST--
getComment
--ARGS--
--bpc-include-file ext/zip/tests/utils.inc \
--FILE--
<?php
$file = 'test_with_comment.zip';
include __DIR__ . '/utils.inc';
$zip = new ZipArchive;
if (!$zip->open($file)) {
	exit('failed');
}
echo $zip->getArchiveComment() . "\n";

$idx = $zip->locateName('foo');
echo $zip->getCommentName('foo') . "\n";
echo $zip->getCommentIndex($idx);

echo $zip->getCommentName('') . "\n";
echo $zip->getCommentName() . "\n";

$zip->close();

?>
--EXPECTF--
Zip archive comment
foo comment
foo comment
Notice: ZipArchive::getCommentName(): Empty string as entry name in %s on line %d


Fatal error: Uncaught ArgumentCountError: Too few arguments to method ZipArchive::getCommentName(): 1 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
