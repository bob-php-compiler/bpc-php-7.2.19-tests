--TEST--
Bug #63874 (Segfault if php_strip_whitespace has heredoc)
--SKIPIF--
skip no highlight_file() highlight_string() php_strip_whitespace()
--FILE--
<?php
echo php_strip_whitespace(__FILE__);

return <<<A
a
A;
?>
--EXPECT--
<?php
echo php_strip_whitespace(__FILE__); return <<<A
a
A;
?>
