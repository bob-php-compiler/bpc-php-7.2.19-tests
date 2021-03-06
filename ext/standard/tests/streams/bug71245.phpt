--TEST--
Bug #71245 (file_get_contents() ignores "header" context option if it's a reference)
--FILE--
<?php
$headers = array('Host: okey.com');
$httpContext = array(
	'http' => array(
		'protocol_version'	=> '1.1',
		'method'			=> 'GET',
		'header'			=> &$headers,
		'follow_location'	=> 0,
		'max_redirects'		=> 0,
		'ignore_errors'		=> true,
		'timeout'			=> 60,
	),
);
$context = stream_context_create($httpContext);
$headers = array("Host: bad.com");
print_r(stream_context_get_options($context));
?>
--EXPECTF--
Array
(
    [http] => Array
        (
            [protocol_version] => 1.1
            [method] => GET
            [header] => Array
                (
                    [0] => Host: okey.com
                )

            [follow_location] => 0
            [max_redirects] => 0
            [ignore_errors] => 1
            [timeout] => 60
        )

)
