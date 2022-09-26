--TEST--
extractTo
--ARGS--
--bpc-include-file ext/zip/tests/utils.inc \
--FILE--
<?php
$file = 'test_with_comment.zip';
include __DIR__ . '/utils.inc';
$zip = new ZipArchive;
if ($zip->open($file) !== TRUE) {
	echo "open failed.\n";
	exit('failed');
}

$zip->extractTo('__oo_extract_tmp');
if (!is_dir('__oo_extract_tmp')) {
	echo "failed. mkdir\n";
}

if (!is_dir('__oo_extract_tmp/foobar')) {
	echo "failed. mkdir foobar\n";
}

if (!file_exists('__oo_extract_tmp/foobar/baz')) {
	echo "failed. extract foobar/baz\n";
} else {
	echo file_get_contents('__oo_extract_tmp/foobar/baz') . "\n";
}

if (!file_exists('__oo_extract_tmp/bar')) {
	echo "failed. bar file\n";
} else {
	echo file_get_contents('__oo_extract_tmp/bar') . "\n";
}

if (!file_exists('__oo_extract_tmp/foo')) {
	echo "failed. foo file\n";
} else {
	echo file_get_contents('__oo_extract_tmp/foo') . "\n";
}


/* extract one file */
$zip->extractTo('__oo_extract_tmp', 'bar');
if (!file_exists('__oo_extract_tmp/bar')) {
	echo "failed. extract  bar file\n";
} else {
	echo file_get_contents('__oo_extract_tmp/bar') . "\n";
}

/* extract two files */
$zip->extractTo('__oo_extract_tmp', array('bar','foo'));
if (!file_exists('__oo_extract_tmp/bar')) {
	echo "failed. extract  bar file\n";
} else {
	echo file_get_contents('__oo_extract_tmp/bar') . "\n";
}
if (!file_exists('__oo_extract_tmp/foo')) {
	echo "failed. extract foo file\n";
} else {
	echo file_get_contents('__oo_extract_tmp/foo') . "\n";
}

rmdir_rf('__oo_extract_tmp');
?>
--EXPECTF--
blabla laber rababer sülz

bar

foo


bar

bar

foo
--UEXPECTF--
blabla laber rababer sÃ¼lz

bar

foo


bar

bar

foo
