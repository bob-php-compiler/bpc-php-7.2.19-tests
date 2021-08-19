--TEST--
Bug #69793: Remotely triggerable stack exhaustion via recursive method calls
--FILE--
<?php
$e = unserialize('O:9:"Exception":7:{s:17:"'."\0".'Exception'."\0".'string";s:1:"a";s:7:"'."\0".'*'."\0".'code";i:0;s:7:"'."\0".'*'."\0".'file";R:1;s:7:"'."\0".'*'."\0".'line";i:1337;s:16:"'."\0".'Exception'."\0".'trace";a:0:{}s:19:"'."\0".'Exception'."\0".'previous";i:10;s:10:"'."\0".'*'."\0".'message";N;}');

var_dump($e."");
?>
--EXPECTF--
Fatal error: Exception::file should be a simple php type, object given in %s on line %d
