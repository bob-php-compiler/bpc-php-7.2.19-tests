--TEST--
Bug #35785 (SimpleXML memory read error)
--SKIPIF--
skip TODO property/dim write/unset
--FILE--
<?php

$xml = simplexml_load_string("<root></root>");
$xml->bla->posts->name = "FooBar";
echo $xml->asXML();
$xml = simplexml_load_string("<root></root>");
var_dump(isset($xml->bla->posts));
$xml->bla->posts[0]->name = "FooBar";
echo $xml->asXML();
$xml = simplexml_load_string("<root></root>");
$xml->bla->posts[]->name = "FooBar";
echo $xml->asXML();
?>
===DONE===
<?php exit(0); __halt_compiler(); ?>
--EXPECTF--
<?xml version="1.0"?>
<root><bla><posts><name>FooBar</name></posts></bla></root>
bool(false)
<?xml version="1.0"?>
<root><bla><posts><name>FooBar</name></posts></bla></root>
<?xml version="1.0"?>
<root><bla><posts><name>FooBar</name></posts></bla></root>
===DONE===
