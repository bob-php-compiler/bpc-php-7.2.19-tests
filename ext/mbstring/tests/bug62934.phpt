--TEST--
Bug #62934: mb_convert_kana() does not convert iteration marks
--SKIPIF--
skip mbstring regex,kana,http,mail
--FILE--
<?php
echo mb_convert_kana('あゝすゞめアヽスヾメ', 'C', 'UTF-8') . "\n";
echo mb_convert_kana('あゝすゞめアヽスヾメ', 'c', 'UTF-8') . "\n";
?>
--EXPECT--
アヽスヾメアヽスヾメ
あゝすゞめあゝすゞめ
