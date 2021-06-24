--TEST--
Bug #35176 (include()/require()/*_once() produce wrong error messages about main())
--INI--
html_errors=1
docref_root="/"
error_reporting=4095
--FILE--
<?php
require_once('nonexisiting.php');
?>
--EXPECTF--
<br />
<b>Fatal error</b>:  require_once(): Failed find required 'nonexisiting.php' (%s) in <b>%sbug35176.php</b> on line <b>2</b><br />
