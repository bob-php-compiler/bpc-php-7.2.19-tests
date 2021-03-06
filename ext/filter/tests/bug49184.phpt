--TEST--
Bug #67296 (filter_input doesn't validate variables)
--ENV--
return <<<END
HTTP_X_FORWARDED_FOR=example.com
END;
--FILE--
<?php
  var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
  var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
  var_dump(getenv("HTTP_X_FORWARDED_FOR"));
  var_dump("done");
?>
--EXPECT--
string(11) "example.com"
string(11) "example.com"
string(11) "example.com"
string(4) "done"
