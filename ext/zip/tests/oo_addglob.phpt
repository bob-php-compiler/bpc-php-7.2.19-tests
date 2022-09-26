--TEST--
ZipArchive::addGlob() method
--CREDITS--
Sammy Kaye Powers <sammyk@sammykmedia.com>
w/Kenzo over the shoulder
#phptek Chicago 2014
--ARGS--
--bpc-include-file ext/zip/tests/utils.inc \
--FILE--
<?php
include __DIR__ . '/utils.inc';
$file = '__tmp_oo_addglob.zip';

copy('test.zip', $file);
touch('foo.txt');
touch('bar.baz');

$zip = new ZipArchive();
if (!$zip->open($file)) {
        exit('failed');
}
$options = array('add_path' => 'baz/', 'remove_all_path' => TRUE);
if (!$zip->addGlob('*.{txt,baz}', GLOB_BRACE, $options)) {
        echo "failed1\n";
}
if ($zip->status == ZIPARCHIVE::ER_OK) {
        dump_entries_name($zip);
        $zip->close();
} else {
        echo "failed2\n";
}
?>
--CLEAN--
<?php
unlink('__tmp_oo_addglob.zip');
unlink('foo.txt');
unlink('bar.baz');
?>
--EXPECTF--
0 bar
1 foobar/
2 foobar/baz
3 entry1.txt
4 baz/foo.txt
5 baz/bar.baz
