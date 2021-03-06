--TEST--
Bug #74862 (Unable to clone instance when private __clone defined)
--FILE--
<?php

class a {
    private function __clone()
    {

    }

    private function __construct()
    {

    }

    public static function getInstance()
    {
        return new self();
    }

    public function cloneIt()
    {
        $a = clone $this;

        return $a;
    }
}

class c extends a {

}

// private constructor
$d = c::getInstance();

// private clone
$e = $d->cloneIt();
var_dump($e);
?>
--EXPECT--
object(a)#2 (0) {
}
