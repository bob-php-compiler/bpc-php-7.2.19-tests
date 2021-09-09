--TEST--
Bug #74053 (Corrupted class entries on shutdown when a destructor spawns another object)
--FILE--
<?php
class b {
    function __destruct() {
	echo "b::destruct\n";
    }
}
class a {
    static $b;
    static $new;
    static $max = 10;
    function __destruct() {
	if (self::$max-- <= 0) return;
	echo "a::destruct\n";
	self::$b = new b;
	self::$new[] = new a;
    }
}
new a;
?>
--EXPECTF--
Warning: in %s line 3: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 11: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
a::destruct
b::destruct
