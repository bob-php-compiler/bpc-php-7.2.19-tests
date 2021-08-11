--TEST--
Bug #54265 (crash when variable gets reassigned in error handler)
--FILE--
<?php
function my_errorhandler($errno,$errormsg, $errfile, $errline) {
  global $my_var;
  $my_var = 0;
  echo "EROOR: $errormsg\n";
}
set_error_handler("my_errorhandler");
$my_var = str_repeat("A",$my_var[0]->errormsg = "xyz");
echo "ok\n";
?>
--EXPECT--
EROOR: Creating default object from empty value
EROOR: str_repeat() expects parameter 2 to be integer, string given
ok
