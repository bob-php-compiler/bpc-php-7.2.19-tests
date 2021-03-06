--TEST--
Test fopen() function : variation: use include path create and read a file (relative)
--SKIPIF--
skip TODO fopen use_include_path
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php
/* Prototype  : resource fopen(string filename, string mode [, bool use_include_path [, resource context]])
 * Description: Open a file or a URL and return a file pointer
 * Source code: ext/standard/file.c
 * Alias to functions:
 */

require_once('fopen_include_path.inc');

$thisTestDir = basename(__FILE__, ".php") . ".dir";
mkdir($thisTestDir);
chdir($thisTestDir);

$newpath = create_include_path();
set_include_path($newpath);
runtest();

$newpath = generate_next_path();
set_include_path($newpath);
runtest();

teardown_include_path();
restore_include_path();
chdir("..");
rmdir($thisTestDir);

function runtest() {
    global $dir1;

    $extraDir = "extraDir17";

    mkdir($dir1.'/'.$extraDir);
    mkdir($extraDir);

	$tmpfile = $extraDir . '/' . basename(__FILE__, ".php") . ".tmp";
	$h = fopen($tmpfile, "w+", true);
	fwrite($h, "This is the test file");
	fclose($h);

	$h = @fopen($dir1.'/'.$tmpfile, "r");
	if ($h === false) {
	   echo "Not created in dir1\n";
	}
	else {
	   echo "created in dir1\n";
	   fclose($h);
	}

	$h = fopen($tmpfile, "r", true);
	if ($h === false) {
	   echo "could not find file for reading\n";
	}
	else {
	   echo "found file for reading\n";
	   fclose($h);
	}

	unlink($tmpfile);
        rmdir($dir1.'/'.$extraDir);
        rmdir($extraDir);
}
?>
===DONE===
--EXPECT--
Not created in dir1
found file for reading
Not created in dir1
found file for reading
===DONE===
