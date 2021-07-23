--TEST--
Bug #24635 (crash on dtor calling other functions)
--FILE--
<?php
class SiteClass {
	function __construct()	{ $this->page = new PageClass(); }
}
class PageClass {
	function Display() {
		$section = new SectionClass("PageClass::Display");
	}
}
class SectionClass {
	function __construct($comment) {
		$this->Comment = $comment;
 	}
	function __destruct() {
		out($this->Comment); // this line doesn't crash PHP
 		out("\n<!-- End Section: " . $this->Comment . "-->"); // this line
 	}
}
function out($code) { return; }
$site = new SiteClass();
$site->page->Display();
echo "OK\n";
?>
--EXPECTF--
Warning: in %s line 14: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

OK
