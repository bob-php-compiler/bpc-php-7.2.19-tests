--TEST--
stream_context_set_option() function - error : missing argument
--CREDITS--
Jean-Marc Fontaine <jean-marc.fontaine@alterway.fr>
# Alter Way Contribution Day 2011
--FILE--
<?php

$context = stream_context_create();
var_dump(stream_context_set_option($context));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stream_context_set_option(): 2 required, 1 provided in %s on line %d
 -- compile-error
