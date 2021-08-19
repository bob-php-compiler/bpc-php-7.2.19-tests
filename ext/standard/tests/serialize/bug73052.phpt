--TEST--
Bug #73052: Memory Corruption in During Deserialized-object Destruction
--FILE--
<?php

class obj {
    var $ryat;
    public function __destruct() {
        $this->ryat = null;
    }
}

$poc = 'O:3:"obj":1:{';
var_dump(unserialize($poc));
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Notice: unserialize(): Error at offset 13 of 13 bytes in %sbug73052.php on line %d
bool(false)
