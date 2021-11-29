--TEST--
Bug #43248 (backward compatibility break in realpath())
--FILE--
<?php
echo realpath(getcwd() . '/../file/');
?>
--EXPECTF--
%sfile
