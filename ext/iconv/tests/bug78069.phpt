--TEST--
Bug #78069 (Out-of-bounds read in iconv.c:_php_iconv_mime_decode() due to integer overflow)
--FILE--
<?php
$hdr = iconv_mime_decode_headers(file_get_contents("bug78069.data"),2);
var_dump(count($hdr));
?>
DONE
--EXPECT--
int(1)
DONE
