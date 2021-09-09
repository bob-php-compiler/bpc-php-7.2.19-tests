--TEST--
Bug #74408 (Endless loop bypassing execution time limit)
--INI--
error_reporting = 32767
--FILE--
<?php
    // E_ALL | E_DEPRECATED | E_STRICT =
 //php.ini: error_reporting = E_ALL | E_DEPRECATED | E_STRICT

 class ErrorHandling {

  public  function error_handler($errno, $errstr, $errfile, $errline) {
    $NonExistingClass2 = 'NonExistingClass2';
    $bla = new $NonExistingClass2();
  }

  public function exception_handler(Error $e) {
	  echo "Caught, exception: " . $e->getMessage();
  }
 }

 set_error_handler(array('ErrorHandling', 'error_handler'));
 set_exception_handler(array('ErrorHandling', 'exception_handler'));

 $NonExistingClass = 'NonExistingClass';
 $blubb = new $NonExistingClass();
?>
--EXPECTF--
Fatal error: Uncaught Error: Class 'NonExistingClass2' not found in %sbug74408.php:%d
Stack trace:
#0 %sbug74408.php(21): ErrorHandling::error_handler(8192, 'Non-static meth...', '%s', %d)
#1 {main}
  thrown in %sbug74408.php on line %d
