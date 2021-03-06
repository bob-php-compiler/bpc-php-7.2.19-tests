--TEST--
mime_content_type(): Testing wrong parameters
--FILE--
<?php

mime_content_type(1);
mime_content_type(NULL);
mime_content_type(new stdclass);
mime_content_type(array());
mime_content_type('foo/inexistent');
mime_content_type('');
mime_content_type("\0");

?>
--EXPECTF--
Warning: mime_content_type(): Can only process string or stream arguments in %s on line %d

Warning: mime_content_type(): Can only process string or stream arguments in %s on line %d

Warning: mime_content_type(): Can only process string or stream arguments in %s on line %d

Warning: mime_content_type(): Can only process string or stream arguments in %s on line %d

Warning: mime_content_type(): Failed identify data 2:No such file or directory in %s on line %d

Warning: mime_content_type(): Empty filename or path in %s on line %d

Warning: mime_content_type(): Empty filename or path in %s on line %d
