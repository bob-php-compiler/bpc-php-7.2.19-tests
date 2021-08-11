--TEST--
Bug #54268 (Double free when destroy_zend_class fails)
--INI--
memory_limit=8M
--FILE--
<?php
class DestructableObject
{
        public function __destruct()
        {
                DestructableObject::__destruct();
        }
}
class DestructorCreator
{
        public function __destruct()
        {
                $this->test = new DestructableObject;
        }
}
class Test
{
        public static $mystatic;
}
$x = new Test();
Test::$mystatic = new DestructorCreator();
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 11: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: GC Warning: Out of Memory! Heap size: 7 MiB. Returning NULL! in %s on line %d
