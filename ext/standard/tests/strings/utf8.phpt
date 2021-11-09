--TEST--
UTF-8<->ISO Latin 1 encoding/decoding test
--SKIPIF--
skip TODO XML Parser
--FILE--
<?php
printf("%s -> %s\n", urlencode("æ"), urlencode(utf8_encode("æ")));
printf("%s <- %s\n", urlencode(utf8_decode(urldecode("%C3%A6"))), "%C3%A6");
?>
--EXPECT--
%E6 -> %C3%A6
%E6 <- %C3%A6
