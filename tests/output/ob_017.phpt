--TEST--
output buffering - stati
--INI--
opcache.optimization_level=0
--FILE--
<?php
$stati = array();
function oh($str, $flags) {
	global $stati;
	$stati[] = "$flags: $str";
	return $str;
}
ob_start("oh", 3);
echo "yes";
echo "!\n";
ob_flush();
echo "no";
ob_clean();
echo "yes!\n";
echo "no";
ob_end_clean();
print_r($stati);
?>
--EXPECT--
yes!
Array
(
    [0] => 5: yes!

    [1] => 2: no
    [2] => 10: yes!
no
)
