--TEST--
Bug #71086: Invalid numeric literal parse error within highlight_string() function
--SKIPIF--
skip no highlight_file() highlight_string()
--FILE--
<?php

$highlightedString = highlight_string("<?php \n 09 09 09;", true);
var_dump($highlightedString);

?>
--EXPECT--
string(169) "<code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;</span><span style="color: #007700">09&nbsp;09&nbsp;09;</span>
</span>
</code>"
