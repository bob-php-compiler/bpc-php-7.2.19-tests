--TEST--
Bug #47516 (nowdoc can not be embed in heredoc but can be embed in double quote)
--SKIPIF--
skip not support heredoc/nowdoc embed each other or in dqstring
--FILE--
<?php
$s='substr';

$htm=<<<DOC
{$s(<<<'ppp'
abcdefg
ppp
,0,3)}
DOC;

echo "$htm\n";

$htm=<<<DOC
{$s(<<<ppp
abcdefg
ppp
,0,3)}
DOC;

echo "$htm\n";

$htm="{$s(<<<'ppp'
abcdefg
ppp
,0,3)}
";

echo "$htm\n";
?>
--EXPECT--
abc
abc
abc
