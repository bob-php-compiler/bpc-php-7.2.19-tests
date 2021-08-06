--TEST--
Bug #47771 (Exception during object construction from arg call calls object's destructor)
--FILE--
<?php
function throw_exc() {
  throw new Exception('TEST_EXCEPTION');
}

class Test {

  public function __construct() {
    echo 'Constr' ."\n";
  }

  public function __destruct() {
    echo 'Destr' ."\n";
  }

}

try {

  $T =new Test(throw_exc());

} catch( Exception $e) {
  echo 'Exception: ' . $e->getMessage() . "\n";
}
?>
--EXPECTF--
Warning: in %s line 12: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Exception: TEST_EXCEPTION
