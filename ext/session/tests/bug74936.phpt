--TEST--
Bug #74936 session_cache_expire() triggers a warning in read mode.
--FILE--
<?php

session_start();
var_dump(session_cache_expire());
var_dump(session_cache_limiter());
var_dump(session_save_path());
?>
===DONE===
--EXPECT--
int(180)
string(7) "nocache"
string(0) ""
===DONE===
