--TEST--
simplexml_load_file()
--FILE--
<?php
	$simple = simplexml_load_file("book.xml");

	var_dump($simple);
	echo "Done";
?>
--EXPECTF--
object(SimpleXMLElement)#1 (1) {
  ["book"]=>
  array(2) {
    [0]=>
    object(SimpleXMLElement)#2 (2) {
      ["title"]=>
      string(19) "The Grapes of Wrath"
      ["author"]=>
      string(14) "John Steinbeck"
    }
    [1]=>
    object(SimpleXMLElement)#3 (2) {
      ["title"]=>
      string(9) "The Pearl"
      ["author"]=>
      string(14) "John Steinbeck"
    }
  }
}
Done
