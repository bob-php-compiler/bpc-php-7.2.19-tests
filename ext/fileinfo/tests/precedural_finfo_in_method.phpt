--TEST--
Using procedural finfo API in a method
--FILE--
<?php

class Test {
    public function method() {
        $finfo = finfo_open(FILEINFO_MIME);
        var_dump(finfo_file($finfo, 'precedural_finfo_in_method.php'));
    }
}

$test = new Test;
$test->method();

?>
--EXPECT--
string(28) "text/x-php; charset=us-ascii"
