--TEST--
Bug #38047 ("file" and "line" sometimes not set in backtrace from inside error handler)
--FILE--
<?php
error_reporting(E_ALL);
set_error_handler('kalus_error_handler');
ini_set("display_errors", "on");

class A {
  function A_ftk($a) {
  }
}

function kalus_error_handler($error_code, $error_string, $filename, $line) {
  echo "$error_string\n";
  get_error_context();
}

function get_error_context() {
  $backtrace = debug_backtrace();
  $n = 1;
  foreach ($backtrace as $call) {
  	echo $n++." ";
  	if (isset($call["file"])) {
  		echo $call["file"];
  		if (isset($call["line"])) {
  			echo ":".$call["line"];
  		}
  	}
  	if (isset($call["function"])) {
  		echo " ".$call["function"]."()";
  	}
  	echo "\n";
  }
  echo "\n";
}

//This will not create file and line items for the call into the error handler
$page["name"] = A::A_ftk();
?>
--EXPECTF--
Non-static method A::A_ftk() should not be called statically
1 %sbug38047.php:13 get_error_context()
2 %sbug38047.php:36 kalus_error_handler()


Fatal error: Uncaught ArgumentCountError: Too few arguments to method A::A_ftk(): 1 required, 0 provided in %sbug38047.php:36
Stack trace:
#0 {main}
  thrown in %sbug38047.php on line 36
