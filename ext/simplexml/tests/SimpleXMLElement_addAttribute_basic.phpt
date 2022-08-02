--TEST--
SimpleXMLElement->addAttribute()
--FILE--
<?php
	$simple = simplexml_load_file("book.xml");
	$simple->addAttribute('type','novels');

	var_dump($simple->attributes());
	echo "Done";
?>
--EXPECTF--
object(SimpleXMLElement)#2 (1) {
  ["@attributes"]=>
  array(1) {
    ["type"]=>
    string(6) "novels"
  }
}
Done
