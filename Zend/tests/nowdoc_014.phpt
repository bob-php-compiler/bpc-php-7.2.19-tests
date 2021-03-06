--TEST--
Highlighting empty nowdoc
--SKIPIF--
skip no highlight_file() highlight_string()
--INI--
highlight.string  = #DD0000
highlight.comment = #FF8000
highlight.keyword = #007700
highlight.default = #0000BB
highlight.html    = #000000
--FILE--
<?php
$code = <<<'EOF'
<?php
  $x = <<<'EOT'
EOT
  $y = 2;
?>
EOF;
highlight_string($code);
?>
--EXPECT--
<code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;$x&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;'EOT'<br />EOT<br />&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>
