--TEST--
ob_start(): Ensure unerasable buffer cannot be accessed or erased by ob_get_clean().
--FILE--
<?php
function callback($string, $phase) {
	static $callback_invocations;
	$callback_invocations++;
	return "[callback:$callback_invocations]$string\n";
}

ob_start('callback', 0, false);

echo "This call will obtain the content, but will not clean the buffer.";
$str = ob_get_clean();
var_dump($str);
?>
--EXPECTF--
Notice: ob_get_clean(): failed to discard buffer of callback (0) in %s on line 11

Notice: ob_get_clean(): failed to delete buffer of callback (0) in %s on line 11
[callback:1]This call will obtain the content, but will not clean the buffer.string(65) "This call will obtain the content, but will not clean the buffer."
