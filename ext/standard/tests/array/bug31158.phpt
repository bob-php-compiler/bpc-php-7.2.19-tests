--TEST--
Bug #31158 (array_splice on $GLOBALS crashes)
--INI--
error_reporting = 32767
--FILE--
<?php
// E_ALL = 32767
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
__();
echo "ok\n";
?>
--EXPECTF--
Warning: bpc not support array_splice($GLOBALS...) in %s on line %d
bug
ok
