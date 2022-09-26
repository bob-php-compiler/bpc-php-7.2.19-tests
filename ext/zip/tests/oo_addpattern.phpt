--TEST--
ZipArchive::addPattern() method
--CREDITS--
Sammy Kaye Powers <sammyk@sammykmedia.com>
w/Kenzo over the shoulder
#phptek Chicago 2014
--ARGS--
--bpc-include-file ext/zip/tests/utils.inc \
--FILE--
<?php
include __DIR__ . '/utils.inc';
$file = '__tmp_oo_addpattern.zip';

copy('test.zip', $file);
touch('foo.txt');
touch('bar.txt');

$zip = new ZipArchive();
if (!$zip->open($file)) {
        exit('failed');
}
$dir = realpath('.');
$options = array('add_path' => 'baz/', 'remove_path' => $dir);
if (!$zip->addPattern('/\.txt$/', $dir, $options)) {
        echo "failed\n";
}
if ($zip->status == ZIPARCHIVE::ER_OK) {
        dump_entries_name($zip);
        $zip->close();
} else {
        echo "failed\n";
}
?>
--CLEAN--
<?php
unlink('__tmp_oo_addpattern.zip');
unlink('foo.txt');
unlink('bar.txt');
?>
--EXPECTF--
0 bar
1 foobar/
2 foobar/baz
3 entry1.txt
4 baz/bar.txt
5 baz/foo.txt
