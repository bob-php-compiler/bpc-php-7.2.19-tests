--TEST--
function optional param with var arity test
--FILE--
<?php

function get_option( $option, $default_value = 'DEFAULT' ) {
    var_dump($option, $default_value);
    var_dump(func_num_args());
}

get_option('opt', 'value');
get_option('opt');

$f = 'get_option';
$f('opt', 'value');
$f('opt');

?>
--EXPECT--
string(3) "opt"
string(5) "value"
int(2)
string(3) "opt"
string(7) "DEFAULT"
int(2)
string(3) "opt"
string(5) "value"
int(2)
string(3) "opt"
string(7) "DEFAULT"
int(2)
