--TEST--
Bug #32799 (crash: calling the corresponding global var during the destruct)
--FILE--
<?php
class test{
  public $c=1;
  function __destruct (){
  	if (!isset($GLOBALS['p'])) {
  		echo "NULL\n";
  	} else {
	    $GLOBALS['p']->c++; // no warning
	    print $GLOBALS['p']->c."\n"; // segfault
	  	var_dump($GLOBALS['p']);
	}
  }
}
$p=new test;
$p=null; //destroy the object by a new assignment (segfault)
?>
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

NULL
