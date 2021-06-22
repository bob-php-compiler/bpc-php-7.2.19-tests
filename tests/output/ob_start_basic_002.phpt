--TEST--
ob_start(): Check behaviour with various callback return values.
--FILE--
<?php
function return_empty_string($string, $phase) {
	return "";
}

function return_false($string, $phase) {
	return false;
}

function return_null($string, $phase) {
	return null;
}

function return_string($string, $phase) {
	return "I stole your output.";
}

function return_zero($string, $phase) {
	return 0;
}

// Use each of the above functions as an output buffering callback:
$functions = get_defined_functions();
$callbacks = $functions['user'];
sort($callbacks);
foreach ($callbacks as $callback) {
  echo "--> Use callback '$callback':\n";
  ob_start($callback);
  echo 'My output.';
  ob_end_flush();
  echo "\n\n";
}

?>
==DONE==
--EXPECTF--
--> Use callback 'return_false':
My output.

--> Use callback 'return_zero':
0

--> Use callback 'return_string':
I stole your output.

--> Use callback 'return_null':


--> Use callback 'return_empty_string':


==DONE==
