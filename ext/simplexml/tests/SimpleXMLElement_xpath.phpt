--TEST--
Testing xpath() with invalid XML
--FILE--
<?php
// gracefully recover from parsing of invalid XML; not available in PHP
define('XML_PARSE_RECOVER', 1);

// we're not interested in checking concrete warnings regarding invalid XML
$xml = @simplexml_load_string("XXXXXXX^", 'SimpleXMLElement', XML_PARSE_RECOVER);

// $xml is supposed to hold a SimpleXMLElement, but not FALSE/NULL
var_dump($xml->xpath("BBBB"));
?>
--EXPECT--
Entity: line 1: parser error : Start tag expected, '<' not found
XXXXXXX^
^
bool(false)
