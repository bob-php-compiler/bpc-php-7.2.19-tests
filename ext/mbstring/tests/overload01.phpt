--TEST--
Function overloading test 1
--SKIPIF--
skip mbstring not support function overload
--INI--
output_handler=
mbstring.func_overload=7
internal_encoding=EUC-JP
--FILE--
<?php
echo mb_internal_encoding()."\n";

$ngchars = array('ǽ','ɽ','��','��');
$str = '��Ͻ�ܻ���Һ���ɽ��ǽ��ɽ��������˽��Ž�չ�ʸ����ͽ���Ƭ���ե���';
var_dump(strlen($str));
var_dump(mb_strlen($str));
--EXPECT--
Deprecated: The mbstring.func_overload directive is deprecated in Unknown on line 0
EUC-JP
int(33)
int(33)
