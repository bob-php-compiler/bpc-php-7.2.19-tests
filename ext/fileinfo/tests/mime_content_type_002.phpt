--TEST--
mime_content_type(): Testing parameter
--FILE--
<?php

var_dump(mime_content_type('mime_content_type_002.php'));
var_dump(mime_content_type(fopen('mime_content_type_002.php', 'r')));
var_dump(mime_content_type('.'));
var_dump(mime_content_type('./..'));

?>
--EXPECTF--
string(%d) "%s"
string(%d) "%s"
string(9) "directory"
string(9) "directory"
