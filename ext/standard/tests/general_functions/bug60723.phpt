--TEST--
Bug #60723  (error_log error time has changed to UTC ignoring default timezo)
--INI--
date.timezone=ASIA/Chongqing
log_errors=On
--FILE--
<?php
$dir = '.';
$log = $dir . "/tmp.err";
ini_set("error_log", $log);
$arr = array();
echo $arr['aa'];
error_log("dummy");
readfile($log);
unlink($log);
?>
--EXPECTF--
Notice: Undefined index: aa in %sbug60723.php on line %d
[%s ASIA/Chongqing] PHP Notice:  Undefined index: aa in %sbug60723.php on line %d
[%s ASIA/Chongqing] dummy
