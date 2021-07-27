--TEST--
Bug #32596 (Segfault/Memory Leak by getClass (etc) in __destruct)
--FILE--
<?php
class BUG {
  public $error = "please fix this thing, it wasted a nice part of my life!\n";
  static function instance() {return new BUG();}

  function __destruct()
  {
    $c=get_class($this); unset($c);
    echo get_class($this) ."\n";
    if(defined('DEBUG_'.__CLASS__)){}
    $c=get_class($this); //memory leak only
    echo $this->error;
  }
}


BUG::instance()->error;
echo "this is still executed\n";
?>
--EXPECTF--
Warning: in %s line 6: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

this is still executed
BUG
please fix this thing, it wasted a nice part of my life!
