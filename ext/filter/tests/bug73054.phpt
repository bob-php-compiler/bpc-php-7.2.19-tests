--TEST--
Bug #73054 (default option ignored when object passed to int filter)
--FILE--
<?php
var_dump(
    filter_var(new stdClass, FILTER_VALIDATE_INT, array(
        'options' => array('default' => 2),
    )),
    filter_var(new stdClass, FILTER_VALIDATE_INT, array(
        'options' => array('default' => 2),
        'flags' => FILTER_NULL_ON_FAILURE
    ))
);
?>
===DONE===
--EXPECT--
int(2)
int(2)
===DONE===
