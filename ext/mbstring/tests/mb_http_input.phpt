--TEST--
mb_http_input()
--SKIPIF--
skip mbstring regex,kana,http,mail
--POST--
a=日本語0123456789日本語カタカナひらがな
--GET--
b=日本語0123456789日本語カタカナひらがな
--FILE--
<?php
// TODO: This is not a real test.... Need to change so that it does real testing
//$debug = true;
ini_set('include_path', __DIR__);
include_once('common.inc');

$ini = ini_get('mbstring.http_input');

// It must be url encoded....
// echo vars
echo $_POST['a']."\n";
echo $_GET['b']."\n";

// Get encoding
$enc = mb_http_input('P');

// check
if (empty($ini)) {
	// Must be pass
	if ($enc === 'pass') {
		echo "OK\n";
	}
	else {
		echo "NG\n";
	}
}
else {
	// Some encoding
	echo "This heppens when php.ini-dist is not used\n";
}

?>
--EXPECT--
日本語0123456789日本語カタカナひらがな
日本語0123456789日本語カタカナひらがな
OK
