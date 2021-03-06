--TEST--
Test is_dir() function: error conditions
--FILE--
<?php
/* Prototype: bool is_dir ( string $filename );
 *  Description: Tells whether the filename is a regular file
 *               Returns TRUE if the filename exists and is a regular file
 */

/* Non-existing dir */
var_dump( is_dir("/no/such/dir") );

echo "*** Done ***";
?>
--EXPECTF--
bool(false)
*** Done ***
