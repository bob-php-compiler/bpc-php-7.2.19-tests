--TEST--
SimpleXML: concatenating attributes
--SKIPIF--
skip TODO property/dim write/unset
--FILE--
<?php
$xml =<<<EOF
<people>
   <person name="Foo"></person>
</people>
EOF;

$people = simplexml_load_string($xml);
var_dump($people->person['name']);
$people->person['name'] .= 'Bar';
var_dump($people->person['name']);

?>
===DONE===
--EXPECTF--
object(SimpleXMLElement)#%d (1) {
  [0]=>
  string(3) "Foo"
}
object(SimpleXMLElement)#%d (1) {
  [0]=>
  string(6) "FooBar"
}
===DONE===
