--TEST--
Bug #43957 (utf8_decode() bogus conversion on multibyte indicator near end of string)
--SKIPIF--
skip TODO XML Parser
--FILE--
<?php
  echo utf8_decode('abc'.chr(0xe0));
?>
--EXPECTF--
abc?
