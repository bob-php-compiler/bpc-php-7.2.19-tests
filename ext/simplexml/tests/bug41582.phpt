--TEST--
Bug #41582 (SimpleXML crashes when accessing newly created element)
--SKIPIF--
skip TODO property/dim write/unset
--FILE--
<?php

$xml = new SimpleXMLElement('<?xml version="1.0" standalone="yes"?>
<collection></collection>');

$xml->movie[]->characters->character[0]->name = 'Miss Coder';

echo($xml->asXml());

?>
===DONE===
--EXPECT--
<?xml version="1.0" standalone="yes"?>
<collection><movie><characters><character><name>Miss Coder</name></character></characters></movie></collection>
===DONE===
