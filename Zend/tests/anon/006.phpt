--TEST--
testing anon classes inside namespaces
--SKIPIF--
skip not support anonymous class
--FILE--
<?php
namespace lone {
   $hello = new class{} ;
}

namespace {
    var_dump ($hello);
}
--EXPECTF--
object(class@%s)#1 (0) {
}
