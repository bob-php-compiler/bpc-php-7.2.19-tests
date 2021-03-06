--TEST--
__sleep() returning undefined declared properties
--FILE--
<?php

class Test {
    public $pub;
    protected $prot;
    private $priv;

    public function __construct() {
        unset($this->pub, $this->prot, $this->priv);
    }

    public function __sleep() {
        return array('pub', 'prot', 'priv');
    }
}

var_dump(serialize(new Test));

?>
--EXPECTF--
Notice: serialize(): "pub" returned as member variable from __sleep() but does not exist in %s on line %d

Notice: serialize(): "prot" returned as member variable from __sleep() but does not exist in %s on line %d

Notice: serialize(): "priv" returned as member variable from __sleep() but does not exist in %s on line %d
string(53) "O:4:"Test":3:{s:3:"pub";N;s:4:"prot";N;s:4:"priv";N;}"
