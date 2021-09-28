--TEST--
Try finally (without catch/finally block)
--FILE--
<?php
function foo () {
   try {
        echo "3";
   }
}

foo();
?>
--EXPECTF--
Parse error: %s in %s on line 6
